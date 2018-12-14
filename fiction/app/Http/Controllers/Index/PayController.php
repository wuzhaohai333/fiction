<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PayController extends Controller
{
    //充值视图
    public function pay(){
        return view('home.pay');
    }
}
