<?php
/**
 * Created by PhpStorm.
 * User: wangningfei
 * Date: 2017/12/2
 * Time: 17:14
 */

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model{

    protected $table = 'notes';
    protected $class_table = 'course_classify';
    protected $user_table = 'admin_user';
    protected $hit_table = 'hitsnum';
    protected $comment_tale = 'note_comment';
    public $limit = 6;

    /**
     * @return mixed
     * 获取分类
     */
    public function getClassify($type=''){
        if(!empty($type)){
            $where = explode(',',$type);
            $class_info = DB::table($this->class_table)->whereIn('class_id',$where)->select('class_id','class_name')->get();
        }else{
            $class_info = DB::table($this->class_table)->select('class_id','class_name')->get();
        }
        return $class_info;
    }

    /**
     * @param $data
     * @return string
     * 添加手记
     */
    public function addData($data){
        $data['addtime'] = date('Y-m-d H:i:s',time());
        $data['notes_content'] = strip_tags($data['notes_content'],'<img>');
        $data['notes_title'] = strip_tags($data['notes_title']);
        $data['is_new'] = 1;
        try{
            return DB::table($this->table)->insertGetId($data);
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * @return mixed
     * 获取分页后的数据
     */
    public function getAllData(){
        $data = DB::table($this->table)->paginate($this->limit);
        $users = DB::table($this->user_table)->get();
        foreach($data as $key=>&$val){

            foreach($users as $k=>$v){
                if($val->uid == $v->admin_id){
                    $val->username = $v->username;
                }
            }
        }

        return $data;
    }

    /**
     * @param $id
     * @return array
     * 手记详细信息
     */
    public function getNoteInfo($id){
        $data = DB::table($this->table)->where(['notes_id'=>$id])->first();
        $user = $this->getOneUser($data->uid);
        $notes = DB::table($this->table)->where(['uid'=>$data->uid])->limit(3)->get();
        $notes_count = DB::table($this->table)->where(['uid'=>$data->uid])->count();
        $comment = $this->getComment($data->notes_id);
        return [
            'data'=>$data,
            'userInfo'=>$user,
            'num'=>$notes_count,
            'notes'=>$notes,
            'comment'=>$comment,
            'comment_num'=>count($comment)
        ];
    }

    /**
     * @param $nid
     * @return mixed
     * 获取评论数据
     */
    public function getComment($nid){
        $comment = DB::table($this->comment_tale)->where(['n_id'=>$nid])->orderBy('n_c_id','desc')->get();
        $users = DB::table($this->user_table)->get();
        foreach($comment as &$val){
            foreach($users as $v){
                if($val->uid == $v->admin_id){
                    $val->username = $v->username;
                    $val->head_ico = $v->head_ico;
                }
            }
        }
        return $comment;
    }

    /**
     * @param $id
     * @return mixed
     * 查找单个用户信息
     */
    public function getOneUser($id){
        return DB::table($this->user_table)->where(['admin_id'=>$id])->first();
    }

    /**
     * @param $uid
     * @param $id
     * @return mixed
     * 获取当前用户的点赞状态
     */
    public function getHitStatus($uid,$id){
        return DB::table($this->hit_table)->where(['uid'=>$uid,'nid'=>$id])->first();
    }

    /**
     * @param $nid
     * @param $uid
     * @return mixed
     * 增加点击量
     */
    public function hitUpdate($nid,$uid){
        $res = DB::table($this->hit_table)->where(['uid'=>$uid,'nid'=>$nid])->get();
        if(empty($res)){
            DB::table($this->hit_table)->insert(['uid'=>$uid,'nid'=>$nid]);
            return DB::table($this->table)->where(['notes_id'=>$nid])->increment('hitsnum',1);
        }else{
            return false;
        }
    }

    /**
     * @param $data
     * @return mixed
     * 手记评论
     */
    public function addComment($data){
        $data['comment_content'] = strip_tags($data['comment_content'],'<img>');
        $data['addtime'] = date('Y-m-d H:i:s',time());
        return DB::table($this->comment_tale)->insertGetId($data);
    }

}