<?php
namespace App\Http\Controller\Frontend;
use Illuminate\Routing\Controllers as BaseController;
class Controller extends BaseController
{
    public function index()
    {
        var_dump($_SERVER['HTTP_HOST']);
    }
}