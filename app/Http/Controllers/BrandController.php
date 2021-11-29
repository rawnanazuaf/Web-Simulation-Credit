<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BrandController extends Controller
{
    public function index()
    {
        $data_brand = \App\Brand::all();
        return view('Management.brand',['data_brand' => $data_brand]);
    }

    public function create(Request $request)
    {
        try {
            \App\Brand::create($request->all());
            alert()->success('Berhasil','Woohoo, Data Berhasil Ditambah :D');
            return redirect('/brand');
        } catch (\Throwable $th) {
            alert()->error('Yaahhh..','Data gagal Ditambah :(');
            return redirect('/brand');
        }
    }

    public function edit($id)
    {
        $data_brand = \App\Brand::find($id);
        return view('Management.brandEdit',['data_brand' => $data_brand]);
    }

    public function update(Request $request, $id)
    {
        try {
            $data_brand                     = \App\Brand::find($id);
            $data_brand->brand_id           = $request->input('md_brand_id');
            $data_brand->brand_nm           = $request->input('md_brand_nm');
            $data_brand->prod_type          = $request->input('md_prod_type');
            $data_brand->ord_no             = $request->input('md_ord_no');
            $data_brand->brand_rate         = $request->input('md_brand_rate');
            $data_brand->spv_rate           = $request->input('md_spv_rate');
            $data_brand->majumtr_1stInctv   = $request->input('md_majumtr_1stInctv');
            $data_brand->majumtr_2ndInctv   = $request->input('md_majumtr_2ndInctv');
            $data_brand->save();
            alert()->success('Berhasil','Woohoo, Data Berhasil Diubah :D');
            return redirect('/brand');
        } catch (\Throwable $th) {
            alert()->error('Yaahhh..','Data gagal Diubah :(');
            return redirect('/brand');
        }
    }

    public function delete($id)
    {
        $data_brand = \App\Brand::find($id);
        $data_brand->delete();
        alert()->success('Berhasil Dihapus',"Yahh, datanya udah gak ada :'D");
        return redirect('/brand');
    }
}
