<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;  
use App\User; 
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login_mobile(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user();
            return response()->json(['success' => true, 'data' => $user, 'message' => 'Inicio de sesion exitoso'],200); 
        } else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }  
}
