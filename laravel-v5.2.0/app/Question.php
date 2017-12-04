<?php
/**
 * Created by PhpStorm.
 * User: wangningfei
 * Date: 2017/11/30
 * Time: 15:32
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;

class Question extends Model{

    //strip_tags   去除HTML标签  第二个参数可以指定不去除的标签

    protected $table = 'question';
    protected $class_table = 'course_classify';
    protected $answer_table = 'answer';
    protected $admin_table = 'admin_user';
    public $limit = 6;

    /**
     * @param $data
     * @param $point
     * @return mixed
     * 添加提问
     */
    public function insert($data,$point){
        $data['question_title'] = strip_tags($data['question_title']);
        $data['question_content'] = strip_tags($data['question_content'],'<img>');
        $data['uid'] = isset($_SESSION['user_id'])?$_SESSION['user_id']:1;
        $data['is_new'] = 1;
        $data['addtime'] = date('Y-m-d H:i:s',time());
        try{
            $id = DB::table($this->table)->insertGetId($data);
            //提问成功加减分
            DB::table('admin_user')->where(['admin_id'=>$data['uid']])->increment('integral',$point);
            return $id;
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * @return mixed
     * 查询所有数据
     */
    public function allData($type){
        switch($type){
            case 'recommend':
                $data = DB::table($this->table)->paginate($this->limit);
                break;
            case 'new':
                $data = DB::table($this->table)->where(['is_new'=>1])->paginate($this->limit);
                break;
            case 'wait':
                $data = DB::table($this->table)->where(['useid'=>0])->paginate($this->limit);
                break;
        }

        return $data;
    }

    /**
     * @return mixed
     * 把问题和分类合并
     */
    public function getClassify($type){
        $data = $this->allData($type);
        $class_info = DB::table($this->class_table)->select('class_id','class_name')->get();

        $list = DB::table($this->answer_table)->get();
        $answers = $this->getAnswers($list);
        foreach($data as $val){
            $ids = explode(',',$val->classifyid);
            $val->answer_num = 0;
            foreach($class_info as $class){
                if(in_array($class->class_id,$ids)){
                    $val->class[] = $class;
                }
            }
            foreach($answers as $answer){
                if($answer->q_id == $val->question_id){
                    if(!isset($val->answers)){
                        $val->answers[] = $answer;
                    }
                    $val->answer_num += 1;
                }
            }
        }
        return $data;
    }

    /**
     * @return mixed
     * 获取问题回复
     */
    public function getAnswers($list){
        $users = DB::table($this->admin_table)->select('admin_id','username','head_ico')->get();
        foreach($list as $answer){
            foreach($users as $user){
                if($answer->uid == $user->admin_id){
                    $answer->username = $user->username;
                    $answer->head = $user->head_ico;
                }
            }
        }
        return $list;
    }

    /**
     * @param $uid
     * @return mixed
     * 获取单个用户的所有信息
     */
    public function getOneUser($uid){
        return DB::table($this->admin_table)->where(['admin_id'=>$uid])->first();
    }

    /**
     * @param $q_id
     * @return mixed
     * 获取问题详细
     */
    public function getOneQuestion($q_id){
        $data = DB::table($this->table)->where(['question_id'=>$q_id])->first();
        $user = $this->getOneUser($data->uid);
        return ['data'=>$data,'user'=>$user];
    }

    /**
     * @param $q_id
     * @return array
     * 获取所有的回复（包括回答的回复）
     */
    public function getBothAnswer($q_id){
        $data = DB::table($this->answer_table)->where(['q_id'=>$q_id])->get();
        $data = $this->getAnswers($data);
        //还差一个回答的回复

        return ['data'=>$data,'num'=>count($data)];
    }

    /**
     * @param $where
     * @param $data
     * @param string $table
     * @return mixed
     * 修改提问表
     */
    public function updateData($where,$data,$table='question'){
        return DB::table($table)->where($where)->update($data);
    }

    /**
     * @param $data
     * @return mixed
     * 添加回复
     */
    public function addAnswer($data){
        $data['addtime'] = date('Y-m-d H:i:s',time());
        $data['answer_content'] = strip_tags($data['answer_content'],'<img>');
        return DB::table($this->answer_table)->insertGetId($data);
    }

    /**
     * @param $id
     * @param $integral
     * @return mixed
     * 如果采纳  加积分
     */
    public function addIntegral($id,$integral){
        return DB::table($this->admin_table)->where(['admin_id'=>$id])->increment('integral',$integral);
    }

}