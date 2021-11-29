<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OtrController extends Controller
{
    public function index()
    {
        $data_otr = \App\Otr::all();
        return view('Management.otr',['data_otr' => $data_otr]);
    }
    
    public function create(Request $request)
    {
        try {
            \App\Otr::create($request->all());
            alert()->success('Berhasil','Woohoo, Data Berhasil Ditambah :D');
            return redirect('/otr');
        } catch (\Throwable $th) {
            alert()->error('Yaahhh..','Data gagal Ditambah :(');
            return redirect('/otr');
        }
    }

    public function edit($id)
    {
        $data_otr = \App\Otr::find($id);
        return view('Management.otrEdit',['data_otr' => $data_otr]);
    }

    public function update(Request $request, $id)
    {
        try {
            $data_otr                = \App\Otr::find($id);
            $data_otr->model_no      = $request->input('md_model_no');
            $data_otr->model_year    = $request->input('md_model_year');
            $data_otr->otr           = $request->input('md_otr');
            $data_otr->comment       = $request->input('md_comment');
            $data_otr->save();
            alert()->success('Berhasil','Woohoo, Data Berhasil Diubah :D');
            return redirect('/otr');
        } catch (\Throwable $th) {
            alert()->error('Yaahhh..','Data gagal Diubah :(');
            return redirect('/otr');
        }
    }

    public function delete($id)
    {
        $data_otr = \App\Otr::find($id);
        $data_otr->delete();
        alert()->success('Berhasil Dihapus',"Yahh, datanya sudah gak ada :'D");
        return redirect('/otr');
    }
}
