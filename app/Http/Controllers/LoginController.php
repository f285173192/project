<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use DB;

class LoginController extends Controller
{
    public function index(){
    	return view('admin.login');
    }
    public function loginon(Request $request){//反射类
       $username = $request->input('username');
       $password = $request->input('password');
       $row=DB::table('users')->where('username',$username)->select('username','password')->get();
	  
       //var_dump($row);
       //
      // $log = DB::getQueryLog();
       //dd($log);   //打印sql语句
      // echo $row['password'];
     if(!empty($row)){
		 if(($row[0]['password']==$password) && ($row[0]['username']==$username)){
		     $request->session()->put('username',$username);//设置session
			 return redirect()->guest('admin/index');
		   }else{
			  return redirect()->guest('/admin');
		   } 
	  }else{
	          return redirect()->guest('/admin');
	  } 	   
    }
	public function loginout(Request $request){
		if($request->session()->has('username')) {//判断username存在不存在
			 $request->session()->forget('username');//清除session
			 $request->session()->flush();
			 return redirect('/admin');
		}else{
			 return redirect('/admin');
		}
	}
}
