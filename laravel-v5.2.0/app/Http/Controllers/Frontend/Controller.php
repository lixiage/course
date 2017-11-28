<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Routing\Controller as BaseController;
class Controller extends BaseController
{
    public function index()
    {
        var_dump($_SERVER['HTTP_HOST']);
    }
}