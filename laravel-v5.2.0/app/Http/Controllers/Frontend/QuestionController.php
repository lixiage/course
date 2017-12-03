<?php
/**
 * Created by PhpStorm.
 * User: wangningfei
 * Date: 2017/11/29
 * Time: 12:16
 */

namespace App\Http\Controllers\Frontend;

use App\Login;
use App\Question;
use DB;
use Illuminate\Http\Request;


class QuestionController extends CommonController
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     * 问题首页
     */
    public function show(Request $request)
    {
        $param = $request->input('type');
        $type = !empty($param)?$param:'recommend';
        $data = (new Question())->getClassify($type);

//        print_r($data);die;
        return view('frontend/question/show',['data'=>$data]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View|void
     * 提出问题
     */
    public function question(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
//            var_dump($data);die;
            if(empty($data['question_title'])||empty($data['classifyid'])||empty($data['question_content'])){
                return $this->goBack('您有数据没有填写');
            }
            $point = $data['point'];
            unset($data['point']);
            $id = (new Question())->insert($data,$point);
            if($id){
                return redirect('question_index');
            }else{
                return $this->goBack('失败');
            }
        } else {
            $classes = DB::table('course_classify')->get();
            foreach ($classes as $class) {
                $class->len = strlen($class->class_name);
            }
            return view('frontend/question/insert', ['classes' => $classes]);
        }
    }

    /**
     * @return \Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
     * 验证是否免费以及积分是否够
     */
    public function verify(){
        session_start();
        $uid = isset($_SESSION['user_id'])?$_SESSION['user_id']:1;
        $data = (new Login())->verify($uid);
        return response()->json($data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     * 问题详情页面
     */
    public function answer(Request $request){
        $question_id = $request->input('q_id');
        $question = new Question();
        $info = $question->getOneQuestion($question_id);
        $answers = $question->getBothAnswer($question_id);
//        print_r($info);die;
        return view('frontend/question/answer',['info'=>$info,'data'=>$answers]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
     * 采纳回复
     */
    public function adopt(Request $request){
        $uid = $request->session()->get('user_id');
        $uid = !empty($uid)?$uid:1;
        $id = $request->input('id');
        $q_id = $request->input('q_id');
        $question = new Question();
        $question->updateData(['question_id'=>$q_id],['useid'=>$id]);
        $question->addIntegral($uid,2);
        $question->updateData(['answer_id'=>$id],['is_use'=>1],'answer');

        return response()->json(['code'=>1]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
     * 回答问题
     */
    public function q_answer(Request $request){
        $data = $request->input();
        $question = new Question();
        $id = $question->addAnswer($data);
        !empty($id)?$id:'';
        return response()->json(['id'=>$id]);
    }

}