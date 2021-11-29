<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class AuthController extends Controller
{
    public function login()
    {
        return view('auths.loginKalkulator');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('username','password'))){
            alert()->success('Woohoo Login Berhasil','Selamat Bekerja :D');
            return redirect('/index');
            // if(Auth::user()->role != 4)
            // {
            //     return redirect('/index');
            // }else{
            //     return redirect('/kalkulator');
            // }
        }
        alert()->error('Oops..','Username atau password yang dimasukkan keliru !!');
        return redirect('/loginKalkulator');

    }

    public function logout(){
        Auth::logout();
        return redirect('/loginKalkulator');
    }
}
