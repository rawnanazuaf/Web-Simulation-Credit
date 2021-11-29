<?php

namespace App\Http\Controllers\OC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Model\Oc_Brand;

class brandController extends Controller
{
    public function index(){
        $data_brand = \App\Oc_Brand::all();
        return view('OC_Management.ocBrand',['data_brand' => $data_brand]);
    }

    public function create(Request $request)
    {
        try {
            $data  = \App\Oc_Brand::create([
                'brandID' => $request->input('brandID'),
                'brandName' => $request->input('brandName'),
                'updatedBy' => auth()->user()->username,
            ]);
            $data->save();
            alert()->success('Berhasil','Woohoo, Data Berhasil Ditambah :D');
            return redirect('/OcBrand');
        } catch (\Throwable $th) {
            alert()->error('Yaahhh..','Data gagal Ditambah :(');
            return redirect('/OcBrand');
        }
    }

    public function update(Request $request, $brandID){
        try {
            $data_brand             = \App\Oc_Brand::find($brandID);
            $data_brand->brandID    = $request->input('md_brandID');
            $data_brand->brandName  = $request->input('md_brandName');
            $data_brand->save();
            alert()->success('Data berhasil diubah');
            return redirect('/OcBrand');
        } catch (\Throwable $th) {
            alert()->error('Data Gagal diubah');
            return redirect('/OcBrand');
        }
    }

    public function delete($brandID)
    {
        try {
            $data_brand = \App\Oc_Brand::find($brandID);
            $data_brand->delete();
            alert()->success('Berhasil Dihapus',"Yahh, datanya udah gak ada :'D");
            return redirect('/OcBrand');
        } catch (\Throwable $th) {
            alert()->error('Yaahhh..','Data gagal Dihapus :(');
            return redirect('/OcBrand');
        }
        
    }
}
