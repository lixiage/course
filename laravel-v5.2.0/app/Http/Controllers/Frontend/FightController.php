<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use App\Fight;
class FightController extends BaseController{
        public function Findex()
        {
            return view('frontend/Fight/index');
        }
}