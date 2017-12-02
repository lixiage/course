<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/29
 * Time: 11:47
 */

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class OrderController extends Controller
{
    public function whdorder_list()
    {
        $u_id = 1;
        $data = DB::select("select * from  course_order LEFT JOIN courses ON course_order.goods_id = courses.cour_id where u_id = '$u_id'");
        $num = count($data);
        echo "<pre>";
        print_r($data);die;
        return view('frontend.order.whdorder_list',[
            'data'=>$data,
            'num' => $num,
        ]);
    }
}