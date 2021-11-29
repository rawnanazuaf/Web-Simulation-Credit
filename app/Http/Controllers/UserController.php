<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $data_user = \App\User::all();
        return view('Management.user',['data_user' => $data_user]);
    }
    
    public function create(Request $request)
    {
        try {
            $data_user = new \App\User;
            $data_user->username        = $request->username;
            $data_user->password        = Hash::make($request->password);
            $data_user->role            = $request->role;
            $data_user->remember_token  = Str::random(60);
            $data_user->save();
            alert()->success('Berhasil','Woohoo, Data Berhasil Ditambah :D');
            return redirect('/user');
        } catch (\Throwable $th) {
            alert()->error('Yaahhh..','Data gagal Ditambah :(');
            return redirect('/user');
        }
    }

    public function edit($id)
    {
        $data_user = \App\User::find($id);
        return view('Management.userEdit',['data_user' => $data_user]);
    }

    public function update(Request $request, $id)
    {
        try {
            $data_user                     = \App\User::find($id);
            $data_user->username           = $request->input('md_username');
            $data_user->password           = Hash::make($request->input('md_password'));
            $data_user->role               = $request->input('md_role');
            $data_user->save();
            alert()->success('Berhasil','Woohoo, Data Berhasil Diubah :D');
            return redirect('/user');
        } catch (\Throwable $th) {
            alert()->error('Yaahhh..','Data gagal Diubah :(');
            return redirect('/user');
        }
    }

    public function profile(Request $request, $id)
    {
        try {
            $data_user                     = \App\User::find($id);
            $data_user->username           = $request->input('md_username');
            $data_user->password           = Hash::make($request->input('md_password'));
            $data_user->save();
            alert()->success('Berhasil','Woohoo, Password Berhasil Diubah :D');
            return redirect('/profile');
        } catch (\Throwable $th) {
            alert()->error('Yaahhh..','Data gagal Diubah :(');
            return redirect('/profile');
        }
    }

    public function delete($id)
    {
        $data_user = \App\User::find($id);
        $data_user->delete();
        alert()->success('Berhasil Dihapus',"Yahh, datanya sudah gak ada :'D");
        return redirect('/user');
    }
}
