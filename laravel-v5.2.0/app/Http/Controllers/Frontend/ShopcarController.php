<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Routing\Controller as BaseController;

class ShopcarController extends BaseController
{
    public function index()
    {
        return view('frontend.shopcar.index');
    }
}

