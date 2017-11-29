<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Routing\Controller as BaseController;
class LoginController extends BaseController
{
    public function index()
    {
        return view('frontend/Login/index');
    }
}