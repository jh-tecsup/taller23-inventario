<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticarController extends Controller
{
    public function login(Request $request){
    	return redirect('/principal');
    }

    public function logout(Request $request){
    	return redirect('/');
    }
}
