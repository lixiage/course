<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
* 笔记
*/
class NotebookController extends Controller
{
	public function Noteindex(){
		return view('frontend\notebook\noteindex');
	}
}