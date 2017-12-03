<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShopcarController extends BaseController
{
    public $u_id;

    public function __construct()
    {
        session_start();
        $_SESSION['user_id'] = 2;
        $u_id = $_SESSION['user_id'];
        $this->u_id = '1';
    }

    /**
     * @param Request $request
     * 购物车    如果登录把商品信息存储在库中，如果没有登录存储在cookie中
     */
    public function swhd_index(Request $request)
    {
        $cour_id = $request->input('cour_id');
        $cour_name = $request->input('cour_name');
        $cour_money = $request->input('cour_money');
        $cour_image = $request->input('cour_image');

        $type_id = $request->input('type_id');
        $date = date('Y-m-d H:i:s');

        if(!empty($this->u_id)){
            $arr = DB::select("select * from shopcar where goods_id = '$cour_id'");
            if($arr){
                echo 2;die;
            }
            $result = DB::table('shopcar')->insert(
                ['u_id'=>$this->u_id,'goods_id'=>$cour_id,'type_id'=>$type_id,'goods_price'=>$cour_money,'cour_name'=>$cour_name,'cour_image'=>$cour_image,'price_sum'=>$cour_money,'shopcar_time'=>$date,'shopcar_updatetime'=>$date]
            );
            echo $result;die;
        }else{
            $data = json_encode(['u_id'=>$this->u_id,'goods_id'=>$cour_id,'cour_image'=>$cour_image,'cour_name'=>$cour_name,'type_id'=>$type_id,'goods_price'=>$cour_money,'should_price'=>$cour_money,'shopcar_time'=>$date,'shopcar_updatetime'=>$date]);
            setcookie("$cour_id",$data,time()+3600*24);
            echo 1;die;
        }
    }

    public function swhd_show()
    {
        if(empty($this->u_id)){
            $data = $this->owdh_showcookie();
        }else{
            $data = DB::select("select * from shopcar");
        }

        $num = count($data);
        return view('frontend.shopcar.swhd_show',[
            'data'=>$data,
            'num'=>$num,
            'u_id'=>$this->u_id,
        ]);
    }

    //删除购物车
    public function swhd_del(Request $request)
    {
        $cour_id = $request -> input('cour_id');
        $flog = true;
        if(empty($this->u_id)){
            $res = setcookie("$cour_id",'',time()-1);
            if(!$res){
                $flog = false;
            }
        }else{
            $result = DB::table('shopcar')
                ->where('goods_id',$cour_id)
                ->delete();
            if(!$result){
                $flog = false;
            }
        }
        if($flog){
            echo json_encode(['code'=>200]);
        }
    }

    public function owdh_showcookie()
    {
        $info = $_COOKIE;
        //print_r($info);die;
        foreach($info as $key => $val){
            if(is_numeric($key)){  //is_numeric  判断是不是数字
                $arr[] = $val;
            }
        }
        foreach($arr as $k => $v){
            $data[] = json_decode($v);
        }
        return $data;
    }

    public function swhd_order(Request $request)
    {
        $u_id = $this->u_id;
        $user = DB::select("select * from admin_user where admin_id = '$u_id'");
        $data = $request->input();
        //echo "<pre>";
        $arr = [];
        foreach($data as $k=>$v){
            foreach($v as $key=>$val){
                $arr[$key][$k] = $val;
            }
        }
        foreach($arr as $whd => $dln){
            if($arr[$whd]['status'] == 'false'){
                $str[] = $whd;
            }
        }
        //删除没有选中的商品
        foreach($str as $a => $b){
            unset($arr[$b]);
        }

        //取出选中的所有的商品的价格的总和，总价格
        foreach($arr as $mdzz => $nmmp){
            $list[] = $nmmp['goods_price'];
            $info[] = $nmmp['goods_id'];
            $haha[] = $nmmp['type_id'];
        }
        $goods_id = implode(',',$info);
        $dmxy = DB::select("select * from course_order where goods_id = '$goods_id' and u_id = '$u_id' and payment_status = 0");
        if($dmxy){
            return "<script>alert('订单已存在，请前去支付');location.href='swhd_payment/".$dmxy[0]->order_id."'</script>";
        }
        $type_id = implode(',',$haha);
        //print_r($type_id);die;
        $sum_price = 0;
        for($i=0;$i<count($list);$i++){
            $sum_price += $list[$i];
        }
        //商品总数量
        $num = count($list);
        //print_r($data);die;
        //订单入库
        $order_no = time().rand(100,999).$u_id;
        $result = DB::table('course_order')->insertGetID(
            ['u_id'=>$u_id,'goods_id'=>$goods_id,'goods_num'=>$num,'order_no'=>$order_no,'type_id'=>$type_id,'goods_price'=>$sum_price,'should_price'=>$sum_price,'add_time'=>date('Y-m-d H:i:s'),'order_updatetime'=>date('Y-m-d H:i:s')]
        );

        $result1 = DB::table('order_goods')->insert(
            ['order_id'=>$result,'type_id'=>$type_id,'goods_price'=>$sum_price,'goods_price_sum'=>$sum_price,'order_goods_savetime'=>date('Y-m-d H:i:s'),'order_goods_time'=>date('Y-m-d H:i:s')]
        );
        //print_r($arr);die;
        return view('frontend.shopcar.swhd_order',[
            'arr'=>$arr,
            'user'=>$user,
            'sum_price'=>$sum_price,
            'num'=>$num,
            'order_id'=>$result,
        ]);
    }


    //购物车支付
    public function swhd_payment(Request $request,$order_id)
    {
        $data = DB::select("select * from course_order where order_id = '$order_id'");
        return view('frontend.shopcar.swhd_payment',[
            'data'=>$data,
        ]);
    }
}
