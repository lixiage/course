<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Routing\Controller as BaseController;
class Controller extends BaseController
{
    public function index()
    {
        var_dump($_SERVER['HTTP_HOST']);
    }
}