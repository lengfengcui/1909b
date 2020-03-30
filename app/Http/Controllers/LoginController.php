<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Admin;
class LoginController extends Controller
{
    public function login(){
    	return view('login.login');
    }
    public function logindo(){
    	//dd(encrypt(123456));
    	$post=request()->except('_token');
    	//dd($post);
    	$adminuser=Admin::where('admin_name',$post['admin_name'])->first();
    	//dd($adminuser);
    	if(!$adminuser){
    		//return redirect('/login')->with('msg','用户名或密码错误');
    		 echo '<script>alert("账户密码错误");window.location.href="/login";</script>';die;
    	}
    	session(['adminuser'=>$adminuser]);
    	return redirect('/admin');
    
    }
}
