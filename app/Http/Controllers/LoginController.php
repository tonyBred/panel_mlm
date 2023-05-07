<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/panel');
        }
        return redirect('/panel');
    }
}
