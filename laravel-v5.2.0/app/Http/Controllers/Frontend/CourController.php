<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
* 笔记
*/
class CourController extends Controller
{
	public function courindex(){
		return view('frontend\cour\courindex');
	}
}