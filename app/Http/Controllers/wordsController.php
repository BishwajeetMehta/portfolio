<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\descripton;

class wordsController extends Controller
{
    public function index()
    {
        $data['about'] = descripton::find(1);
        $_SESSION['description'] = $data['about'];
       
    }
}
