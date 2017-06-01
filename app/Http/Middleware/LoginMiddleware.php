<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
	   if(!$request->session()->has('username')){//�ж�session�Ƿ����
	     return redirect('/Login/index');
	   }else{
	     return $next($request);
	   }    
        
    }
}
