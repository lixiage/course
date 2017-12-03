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
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     * 查询订单及删除订单
     */
    public $u_id;

    public function __construct()
    {
        session_start();
        $_SESSION['user_id'] = 2;
        $u_id = $_SESSION['user_id'];
        $this->u_id = 1;
    }

    public function whdorder_list(Request $request)
    {
//        $list = $_COOKIE[1];
//        $list = json_decode($list);
//        print_r($list);die;
        $u_id = $this->u_id;
        if($u_id == ''){
            return "<script>alert('请先登录');location.href='question_index'</script>";
        }

        if($request->isMethod('post')){
            $order_id = $request->input('order_id');
            $result = DB::table('course_order')
                ->where('order_id',$order_id)
                ->delete();

            $res = DB::table('order_goods')
                ->where('order_id',$order_id)
                ->delete();
            echo 1;die;
        }
        //查询所有的订单
        $data = DB::select("select * from  course_order LEFT JOIN courses ON course_order.goods_id = courses.cour_id where u_id = '$u_id' AND order_status = 0");
        $num = count($data);
//        echo "<pre>";
//        print_r($data);die;
        return view('frontend.order.whdorder_list',[
            'data'=>$data,
            'num' => $num,
        ]);
    }

    /**
     * @param Request $request
     * 修改订单状态
     * order_id 订单id
     */
    public function owhd_saveorder(Request $request)
    {
        $order_id = $request->input('order_id');

        $order_updatetime = date('Y-m-d H:i:s');
        //修改订单表
        $result = DB::table('course_order')
            ->where('order_id',$order_id)
            ->update(['order_status'=>1,'order_updatetime'=>$order_updatetime]);

        //修改订单商品表
        $result = DB::table('order_goods')
            ->where('order_id',$order_id)
            ->update(['order_goods_status'=>1,'order_goods_savetime'=>$order_updatetime]);
        echo $result;die;
    }

    /**
     * 生成订单页面
     */
    public function owhd_order(Request $request,$cour_id)
    {
        $u_id = 1;
        //$u_id = $_SESSION['user_id'];
        //查询课程表
        $info = DB::select("select * from courses where cour_id = '$cour_id'");
        //查询订单表  看是否该商品已生成订单
        $arr = DB::select("select * from course_order where goods_id = '$cour_id' and u_id = '$u_id' and payment_status = 0");
        if($arr){
            return "<script>alert('订单已存在，请前去支付');location.href='/owhd_payment/".$arr[0]->order_id."/".$info[0]->cour_name."'</script>";
        }

        //生成订单号
        $date = date('Y-m-d H:i:s');
        $time = time();
        $time = substr($time,3);
        $rand = rand(100,999);
        $order_no = $cour_id.$time.$u_id.$rand;

        $user = DB::select("select * from admin_user where admin_id = '$u_id'");

        //添加订单
        $result = DB::table('course_order')->insertGetID(
            //['u_id'=>1,'goods_id'=>2,'order_no'=>465312974646,'type_id'=>1,'goods_price'=>250,'should_price'=>250,'add_time'=>'2017-02-05 15:30:00','order_updatetime'=>'2017-02-05 15:30:00']
            ['u_id'=>$u_id,'goods_id'=>$cour_id,'order_no'=>$order_no,'type_id'=>$info[0]->type_id,'goods_price'=>$info[0]->cour_money,'should_price'=>$info[0]->cour_money,'add_time'=>$date,'order_updatetime'=>$date]
        );

        //添加商品订单关联
        $result1 = DB::table('order_goods')->insert(
            ['order_id'=>$result,'type_id'=>$info[0]->type_id,'goods_price'=>$info[0]->cour_money,'goods_price_sum'=>$info[0]->cour_money,'order_goods_savetime'=>$date,'order_goods_time'=>$date]
        );

        $cour_image = $info[0]->cour_image;
        //echo $cour_image;die;

        return view('frontend.order.owhd_order',[
            'info'=>$info,
            'cour_image' => $cour_image,
            'username' => $user,
            'order_id'=>$result,
        ]);
    }

    /**
     * 购买页面
     */
    public function owhd_shop(Request $request,$cour_id)
    {
        $info = DB::select("select * from courses where cour_id = '$cour_id'");
//        echo "<pre>";
//        print_r($info);die;
        return view('frontend.order.owhd_shop',[
            'info'=>$info,
        ]);
    }

    /**
     * 支付页面
     */
    public function owhd_payment(Request $request,$order_id,$cour_name)
    {
        $data = DB::select("select * from course_order where order_id = '$order_id'");
        return view('frontend.order.owhd_payment',[
            'data'=>$data,
            'cour_name' => $cour_name,
        ]);
    }
}