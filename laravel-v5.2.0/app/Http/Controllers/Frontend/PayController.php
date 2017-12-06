<?php
namespace App\Http\Controllers\Frontend;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class PayController extends BaseController
{

    /**
     * @return $form 返回表单
     */
    public  function pay(){
        return view("frontend/Pay/pagepay");
    }

    /**
     * 回调函数
     * 更改你的订单状态
     */
    public  function  callReturn(){

        $order_no = $_GET['out_trade_no'];
        $result = DB::table('course_order')
            ->where('order_no',$order_no)
            ->update(['payment_status'=>1]);
        if($result){
            return redirect('whdorder_list');
        }

    }

}