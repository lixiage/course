<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
     public function index()
     {
         echo 1;die;
         return view('index.index');
     }
}