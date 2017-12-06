<?php
/**
 * Created by PhpStorm.
 * User: wangningfei
 * Date: 2017/12/2
 * Time: 16:24
 */

namespace App\Http\Controllers\Frontend;

use App\Notes;
use DB;
use Illuminate\Http\Request;
use Storage;

class NoteController extends CommonController{


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     * 首页
     */
    public function index(){
        $note = new Notes();
        $data = $note->getAllData();

        return view('frontend/note/index',['data'=>$data]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|
     * \Illuminate\Http\RedirectResponse|
     * \Illuminate\Routing\Redirector|
     * \Illuminate\View\View|
     * string|
     * \think\response\Redirect|
     * \think\response\View|
     * void
     * 添加手记
     */
    public function insert(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            $file = $request->file('notes_face');
            if(empty($data['notes_title'])||empty($data['notes_content'])||empty($file)||empty($data['classifyid'])){
                return $this->goBack('有选项未填');
            }
            $data['notes_face'] = $this->upload($file);
            $uid = $this->getSession($request,'user_id');
            $data['uid'] = isset($uid)?$uid:1;
            $id = (new Notes())->addData($data);
            if($id){
                return redirect('note_index');
            }else{
                return $this->goBack('手记添加失败');
            }
        }else{
            $classes = DB::table('course_classify')->get();
            foreach ($classes as $class) {
                $class->len = strlen($class->class_name);
            }
            return view('frontend/note/insert',['classes'=>$classes]);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     * 手记详细页面
     */
    public function info(Request $request){
        $uid = $this->getSession($request,'user_id');
        $uid = !empty($uid)?$uid:1;
        $n_id = $request->input('id');
        $note = new Notes();
        $data = $note->getNoteInfo($n_id);
        $class = $note->getClassify($data['data']->classifyid);
        $user = $note->getOneUser($uid);
        $is_hit = $note->getHitStatus($uid,$n_id);
        return view('frontend/note/info',['data'=>$data,'class'=>$class,'user'=>$user,'is_hit'=>$is_hit]);
    }

    /**
     * @param Request $request
     * 点赞量+1
     */
    public function hit(Request $request){
        $uid = $this->getSession($request,'user_id');
        $uid = !empty($uid)?$uid:1;
        $n_id = $request->input('nid');
        $note = new Notes();
        return response()->json($note->hitUpdate($n_id,$uid));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|string|\think\response\Redirect|void
     * 评论添加
     */
    public function comment(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            if(empty($data['comment_content'])||empty($data['uid'])||empty($data['n_id'])){
                return $this->goBack('评论内容不能为空');
            }
            $note = new Notes();
            $id = $note->addComment($data);
            if($id){
                return redirect('note_info?id='.$data['n_id']);
            }else{
                return $this->goBack('评论失败');
            }
        }
        return $this->goBack('请先提交数据');
    }

}