<?php

namespace App\Http\Controllers\OC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Model\Oc_Dealer;

class dealerController extends Controller
{
    public function index(){
        $data_dealer = \App\Oc_Dealer::all();
        return view('OC_Management.ocDealer',['data_dealer' => $data_dealer]);
    }

    public function create(Request $request){
        try {
            $data  = \App\Oc_Dealer::create([
                'wilayahID' => $request->input('wilayahID'),
                'dealerID' => $request->input('dealerID'),
                'dealerName' => $request->input('dealerName'),
                'productType' => $request->input('productType'),
                'updatedBy' => auth()->user()->username,
            ]);
            $data->save();
            alert()->success('Data Berhasil Ditambah');
            return redirect('/OcDealer');                              
        } catch (\Throwable $th) {
            alert()->error('Data Gagal Ditambah');
            return redirect('/OcDealer');
        }
    }

    public function delete($dealerID){
        $data_dealer = \App\Oc_Dealer::find($dealerID);
        $data_dealer->delete();
        alert()->success('Data Berhasil Dihapus');
        return redirect('/OcDealer');
    }

    public function update(Request $request, $dealerID){
        $data_dealer = \App\Oc_Dealer::find($dealerID);
        $data_dealer->wilayahID      = $request->input('md_wilayahID');
        $data_dealer->dealerID       = $request->input('md_dealerID');
        $data_dealer->dealerName     = $request->input('md_dealerName');
        $data_dealer->productType    = $request->input('md_productType');
        $data_dealer->save();
        alert()->success('Data Berhasil Diubah');
        return redirect('/OcDealer');
    }
    
}
