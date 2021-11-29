<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class IncentiveRateController extends Controller
{
    public function index()
    {
        $data_incentiveRate = \App\Incentive_Rate::all();
        return view('Management.incentiveRate',['data_incentiveRate' => $data_incentiveRate]);
    }

    public function create(Request $request)
    {
        try {
            \App\Incentive_Rate::create($request->all());
            alert()->success('Berhasil','Woohoo, Data Berhasil Ditambah :D');
            return redirect('/incentiveRate');
        } catch (\Throwable $th) {
            alert()->error('Yaahhh..','Data gagal Ditambah :(');
            return redirect('/incentiveRate');
        }
    }

    public function edit($id)
    {
        $data_incentiveRate = \App\Incentive_Rate::find($id);
        return view('Management.incentiveRateEdit',['data_incentiveRate' => $data_incentiveRate]);
    }

    public function update(Request $request, $id)
    {
        try {
            $data_incentiveRate                     = \App\Incentive_Rate::find($id);
            $data_incentiveRate->brand_id           = $request->input('md_brand_id');
            $data_incentiveRate->model_no           = $request->input('md_model_no');
            $data_incentiveRate->model_rate         = $request->input('md_model_rate');
            $data_incentiveRate->model_below_rate   = $request->input('md_model_below_rate');
            $data_incentiveRate->comment            = $request->input('md_comment');
            $data_incentiveRate->save();
            alert()->success('Berhasil','Woohoo, Data Berhasil Diubah :D');
            return redirect('/incentiveRate');
        } catch (\Throwable $th) {
            alert()->error('Yaahhh..','Data gagal Diubah :(');
            return redirect('/incentiveRate');
        }
    }

    public function delete($id)
    {
        $data_incentiveRate = \App\Incentive_Rate::find($id);
        $data_incentiveRate->delete();
        alert()->success('Berhasil Dihapus',"Yahh, datanya sudah gak ada :'D");
        return redirect('/incentiveRate');
    }


}
