<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index(){
        $users = User::all();
        return view('Usuarios.Index', compact('users'));
    }

    public function Form(){
        return view('Usuarios.Form');
    }

    public function Register(Request $request){
        User::create([
            'name' => $request->Nombre,
            'email' => $request->Email,
            'password' => Hash::make($request->Password),
        ]);
        return redirect()->route('Usuarios')->with('success','Usuario nuevo registrado');
    }
}
