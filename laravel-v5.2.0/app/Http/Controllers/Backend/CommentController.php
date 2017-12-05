<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CourseDYW;
header("content-type:text/html;charset=utf-8");

class CommentController extends CommonController
{
	//展示
	public function comment(){
        $infoooo = $_SESSION['userInfo'];
		$comment = DB::table('comment')
		  ->join('admin_user', 'comment.admin_id', '=', 'admin_user.admin_id')
		  ->join('courses', 'comment.cour_id', '=', 'courses.cour_id')
		  ->paginate(3);
		// print_r($comment);die;
		return view('backend\comment\comment',['comment'=>$comment,'infoo'=>$infoooo]);
	}
	//删除评论
	public function comment_del(Request $request,$comment_id){
		$commentdel = DB::table('comment')->where('comment_id',$comment_id)->delete();
		// print_r($commentdel);die;
		if($commentdel){
			return redirect('comment');
		}else{
			return redirect('comment_del');

		}
	}
}