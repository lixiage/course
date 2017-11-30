<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;


class PasswordsController extends BaseController
{
    /**
     * 忘记密码首页
     */
    public function index(){
        return view("frontend/Mima/mima");
    }
}