<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Hash, Auth, Str;
use App\User;

class ConnectController extends Controller
{
    public function __Construct(){
        $this->middleware('guest', ['only' =>'showLoginForm']);
    }

    
    public function showLoginForm(){
        return view('connect.login');

    }
    
    public function getLogin(){
        return view('connect.login');
    }

    public function postLogin(Request $request){
        $rules =[
            'email' => 'required|email',
            'password' => 'required|min:8',
            
        ];
        $messages =[
            'email.required'=>'Su correo electrónico es requerido',
            'email.email'=>'El formato de su correo electrónico es invalido',
            'password.required'=>'Por favor escriba una contraseña',
            'password.min'=>'La contraseña debe tener al menos 8 caracteres.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error.')->with('typealert','danger');
        else:
            if(Auth::attempt(['email'=>$request->input('email'), 'password'=>$request->input('password')], true)):
                if(Auth::user()->status =="100"):
                    return redirect('/logout');
                else:
                    return redirect()->route('dashboard');
                endif;
            else:
                return back()->with('message','Email o contraseña incorrecta.')->with('typealert','danger')
                ->withInput(request(['email']));
            endif;
        endif;
    }

    public function postLogout(){
        $status =  Auth::user()->status;
        Auth::logout();
        if($status =="100"):
            return redirect('/login')->with('message','Su usuario fue suspendido')->with('typealert','danger');
        else:
            return redirect('/');
        endif;
    }
}
