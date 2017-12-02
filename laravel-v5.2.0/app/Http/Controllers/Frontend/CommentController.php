<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CommentController extends Controller
{
    public function zindex(Request $request)
    {
    	$cour_id = 1;
		$comment = DB::table('comment')
					->where('cour_id',$cour_id)
					->join('admin_user', 'admin_user.admin_id', '=', 'comment.admin_id')
					->select()
					->orderBy('addtime','desc')
					->get();
					//回复
		//强制转换为数组
		$carr =[];
		foreach ($comment as $key => $value) {
		 	$carr[] = (array)$value;
		 } 
		$comment_ids = array_column($carr,'comment_id');
		 // print_r($comment_ids);die;Array ( [0] => 3 [1] => 2 [2] => 1 )

		$comment = array_combine($comment_ids, $comment);
		$carrs =[];
		foreach ($comment as $key => $value) {
		 	$carrs[] = (array)$value;
		 }

		// print_r($carrs);die;
	    $reply = DB::table('reply')->whereIn('comment_id',$comment_ids)->select()->get();
		$rarr =[];
		foreach ($reply as $key => $value) {
		 	$rarr[] = (array)$value;
		 } 
		foreach ($carrs as $key=>&$val) {
	    	foreach ($rarr as $k => $v) {
	    		if($v['comment_id'] == $val['comment_id']){
	    			$val['reply'][] = $v;
	    		}
	    	}
	    }

		// print_r($carrs);die;
	 	

        return view('frontend/comment/zindex',['comment'=>$carrs]);
    }

	//评论
	public function zadd(Request $request){
		// echo "123";die;
		$content = $request->input('content');
		// echo $content;die;
		$addtime = date('Y-m-d H:i:s');
		$cour_id = 1;
		$admin_id = 24;
		$res = DB::table('comment')->insert(['content'=>$content,'addtime'=>$addtime,'admin_id'=>$admin_id,'cour_id'=>$cour_id]);
		if($res){
			$comment = DB::table('comment')
					->where('cour_id',$cour_id)
					->join('admin_user', 'admin_user.admin_id', '=', 'comment.admin_id')
					->select()
					->orderBy('addtime','desc')
					->get();
			$comm = [];
			foreach ($comment as $key => $value) {
				$comm[] =(array)$value;
			}
			// print_r($comm);die;
			echo json_encode($comm);
		}else{

			return -1;
		}
	}
	//点赞
	public function zhits(Request $request){
			//根据用户修改评论表中的的点赞量	
		//当前用户
		$admin_id = 24;
	    $comment_id  = $request->input('comment_id');	
		// print_r($comment_id);die;

		// 首先查询点赞表 中该用户有没有给该评论点赞
		$zan = DB::select("select * from admin_comment_hits where admin_id='$admin_id' and comment_id = '$comment_id'");
			if($zan){//如果已点赞
				//先根据用户id和评论id删除
				$hitsmsg = DB::select("delete from admin_comment_hits where admin_id = '$admin_id' and comment_id = '$comment_id'");
				//根据评论id查询评论表
				$hits = DB::select("select * from comment where comment_id = '$comment_id'");	
				//让点赞量字段--1
				// print_r($hits);die;
				$hitsnum =$hits[0]->hitsnum - 1;
				//根据评论修改点赞量
				$hitsnums = DB::table('comment')->where('comment_id',$comment_id)->update(['hitsnum'=>$hitsnum]);
				$msg = DB::select("select hitsnum from comment where comment_id = $comment_id");
				if(isset($msg[0])){
					return $msg[0]->hitsnum;
				}
			}else{//未点赞
				//根据用户和评论添加记录点赞数据
				$addhitsnum = DB::table("admin_comment_hits")->insert(['comment_id'=>$comment_id,'admin_id'=>$admin_id]);
				//根据评论id查询评论表
				$hits = DB::select("select * from comment where comment_id = '$comment_id'");	
				//让点赞量字段+1
				$hitsnum =$hits[0]->hitsnum + 1;
				//根据评论修改点赞量
				$hitsnums = DB::table('comment')->where('comment_id',$comment_id)->update(['hitsnum'=>$hitsnum]);
				$msg = DB::select("select hitsnum from comment where comment_id = $comment_id");
				if(isset($msg[0])){
					return $msg[0]->hitsnum;
				}
			}
		}
		//回复
		public function zreply(Request $request){
			$comment_id  = $request->input('comment_id'); 
			$admin_id = 24;
			$content  = $request->input('content'); 
			// echo $content;die;
			$addtime = date('Y-m-d H:i:s');
			$replyadd = DB::table('reply')->insert(['admin_id'=>$admin_id,'comment_id'=>$comment_id,'content'=>$content,'addtime'=>$addtime]);
			
			// echo json_encode($replyadd);die;

			if($replyadd){
				$cour_id = 1;
				$comment = DB::table('comment')
							->where('cour_id',$cour_id)
							->join('admin_user', 'admin_user.admin_id', '=', 'comment.admin_id')
							->select()
							->orderBy('addtime','desc')
							->get();
							//回复
				//强制转换为数组
				$carr =[];
				foreach ($comment as $key => $value) {
				 	$carr[] = (array)$value;
				 } 
				$comment_ids = array_column($carr,'comment_id');
				 // print_r($comment_ids);die;Array ( [0] => 3 [1] => 2 [2] => 1 )

				$comment = array_combine($comment_ids, $comment);
				$carrs =[];
				foreach ($comment as $key => $value) {
				 	$carrs[] = (array)$value;
				 }

			    $reply = DB::table('reply')->whereIn('comment_id',$comment_ids)->select()->get();
				$rarr =[];
				foreach ($reply as $key => $value) {
				 	$rarr[] = (array)$value;
				 } 
				 
			    foreach ($rarr as $key=>$val) {
			      $carrs[$key]['reply'][]=$val;
			    }
			echo json_encode($carrs);
			}else{
				echo "error";
			}
		}
}