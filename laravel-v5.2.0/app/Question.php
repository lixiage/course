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

    protected $table = 'question';
    protected $two_table = 'course_classify';
    protected $three_table = 'answer';
    protected $four_table = 'admin_user';

    /**
     * @param $data
     * @param $point
     * @return mixed
     * 添加提问
     */
    public function insert($data,$point){
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
                $data = DB::table($this->table)->get();
                break;
            case 'new':
                $data = DB::table($this->table)->where(['is_new'=>1])->get();
                break;
            case 'wait':
                $data = DB::table($this->table)->where(['useid'=>0])->get();
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
        $class_info = DB::table($this->two_table)->select('class_id','class_name')->get();
        $answers = $this->getAnswers();
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

    public function getAnswers(){
        $list = DB::table($this->three_table)->get();
        $users = DB::table($this->four_table)->select('admin_id','username')->get();
        foreach($list as $answer){
            foreach($users as $user){
                if($answer->uid == $user->admin_id){
                    $answer->username = $user->username;
                }
            }
        }
        return $list;
    }

}