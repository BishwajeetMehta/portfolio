<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mydetail;
class detail extends Controller
{
    public function index()
    {
        $data['info'] = mydetail::find(1);
        $_SESSION['details'] = $data['info'];
       
    }
}
