<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ModelController extends Controller
{
    public function index()
    {
        $data_tipemodel = \App\TipeModel::all();
        return view('Management.model',['data_tipemodel' => $data_tipemodel]);
    }
    
    public function create(Request $request)
    {
        try {
            \App\TipeModel::create($request->all());
            alert()->success('Berhasil','Woohoo, Data Berhasil Ditambah :D');
            return redirect('/model');
        } catch (\Throwable $th) {
            alert()->error('Yaahhh..','Data gagal Ditambah :(');
            return redirect('/model');
        }
    }

    public function edit($id)
    {
        $data_tipemodel = \App\TipeModel::find($id);
        return view('Management.modelEdit',['data_tipemodel' => $data_tipemodel]);
    }

    public function update(Request $request, $id)
    {
        try {
            $data_tipemodel                     = \App\TipeModel::find($id);
            $data_tipemodel->brand_id           = $request->input('md_brand_id');
            $data_tipemodel->model_no           = $request->input('md_model_no');
            $data_tipemodel->model_nm         = $request->input('md_model_nm');
            $data_tipemodel->category_no        = $request->input('md_category_no');
            $data_tipemodel->comment            = $request->input('md_comment');
            $data_tipemodel->vhc_type           = $request->input('md_vhc_type');
            $data_tipemodel->save();
            alert()->success('Berhasil','Woohoo, Data Berhasil Diubah :D');
            return redirect('/model');
        } catch (\Throwable $th) {
            alert()->error('Yaahhh..','Data gagal Diubah :(');
            return redirect('/model');
        }
    }

    public function delete($id)
    {
        $data_tipemodel = \App\TipeModel::find($id);
        $data_tipemodel->delete();
        alert()->success('Berhasil Dihapus',"Yahh, datanya sudah gak ada :'D");
        return redirect('/model');
    }
}
