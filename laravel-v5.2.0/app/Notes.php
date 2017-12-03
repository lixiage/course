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

    public function getClassify(){
        $class_info = DB::table($this->class_table)->select('class_id','class_name')->get();
        return $class_info;
    }

}