<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index()
   {
       return view('/login');
   }

   public function postLogin(Request $request)
   {
       if(Auth::attempt($request->only('email','password'))){
           return redirect('/dashboard');
       }
       return redirect('/dashboard');
   }
   
}
