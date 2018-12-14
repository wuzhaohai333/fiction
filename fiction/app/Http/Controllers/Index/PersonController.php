<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonController extends Controller
{
    //个人中心视图
    public function person(){
        return view('home.person');
    }
}
