<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * 后台首页方法
     */
    public function index()
    {
     	return view('admin.index');
    }
   public function session(Request $request){
   if($request->session()->has('username')) {//判断username存在不存在
     $request->session()->forget('username');//清除session
     $request->session()->flush();
	 
    }
   }


}
