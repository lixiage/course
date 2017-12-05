<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontend/index/index');
    }


}