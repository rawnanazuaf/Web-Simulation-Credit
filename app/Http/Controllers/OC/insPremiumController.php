<?php

namespace App\Http\Controllers\OC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class insPremiumController extends Controller
{
    public function index(){
        $data_inspremium = \App\Oc_Ins_Premium::all();
        return view('OC_Management.ocInsPremium',['data_inspremium' => $data_inspremium]);
    }

    public function create(Request $request){
        try {
            $data_inspremium = \App\Oc_Ins_Premium::create([
                'wilayahID'         => $request->input('wilayahID'),
                'insrncPremiumID'   => $request->input('insrncPremiumID'),
                'disasterTypeID'    => $request->input('disasterTypeID'),
                'insrncTypeNo'      => $request->input('insrncTypeNo'),
                'insrncType'        => $request->input('insrncType'),
                'fromVal'           => $request->input('fromVal'),
                'toVal'             => $request->input('toVal'),
                'firstYear'         => $request->input('firstYear'),
                'secondYear'        => $request->input('secondYear'),
                'updatedBy'         => auth()->user()->username,
            ]);
            $data_inspremium->save();
            alert()->success('Data Berhasil Ditambah');
            return redirect('/OcInsPremium');
        } catch (\Throwable $th) {
            alert()->error('Data Gagal Ditambah');
            return redirect('/OcInsPremium');
        }
        
    }

    public function delete($insrncPremiumID){
        try {
            $data_inspremium = \App\Oc_Ins_Premium::find($insrncPremiumID);
            $data_inspremium->delete();
            alert()->success('Data Berhasil Dihapus');
            return redirect('/OcInsPremium');
        } catch (\Throwable $th) {
            alert()->error('Data Gagal Dihapus');
            return redirect('/OcInsPremium');
        }
        
    }

    public function update(Request $request, $insrncPremiumID){
        try {
            $data_inspremium = \App\Oc_Ins_Premium::find($insrncPremiumID);
            $data_inspremium->wilayahID         = $request->input('md_wilayahID');
            $data_inspremium->insrncPremiumID   = $request->input('md_insrncPremiumID');
            $data_inspremium->disasterTypeID    = $request->input('md_disasterTypeID');
            $data_inspremium->insrncTypeNo      = $request->input('md_insrncTypeNo');
            $data_inspremium->insrncType        = $request->input('md_insrncType');
            $data_inspremium->fromVal           = $request->input('md_fromVal');
            $data_inspremium->toVal             = $request->input('md_toVal');
            $data_inspremium->firstYear         = $request->input('md_firstYear');
            $data_inspremium->secondYear        = $request->input('md_secondYear');
            $data_inspremium->save();
            alert()->success('Data Berhasil Diubah');
            return redirect('/OcInsPremium');
        } catch (\Throwable $th) {
            alert()->error('Data Gagal Diubah');
            return redirect('/OcInsPremium');
        }
        
    }
}
