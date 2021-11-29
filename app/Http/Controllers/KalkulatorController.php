<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\ServiceProvider;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use DB;
use \App\Brand;
use \App\TipeModel;
use \App\Tenure;
use \App\Otr;
use \App\Disaster_Type;
use \App\cariRateInsu;

class KalkulatorController extends Controller
{
    public function index(Request $request)
    {
        $data_brand = \App\Brand::all();
        $data_addInsurance = \App\Disaster_Type::all();
        return view('Kalkulator.kalkulator', ['data_brand' => $data_brand], ['data_addInsurance' => $data_addInsurance]);
    }

    public function findModel(Request $request)
    {
        $data_model = \App\TipeModel::select('brand_id','model_nm','model_no', 'vhc_type')->where('brand_id',$request->brand_id)->take(10000)->get();

        return response()->json($data_model);
    }

    public function cariVhcType(Request $request)
    {
        $data_model = \App\TipeModel::select('brand_id','model_nm','model_no', 'vhc_type','category_no')->where('brand_id',$request->brand_id)->where('model_no',$request->model_no)->first();

        return response()->json($data_model);
    }

    public function cariOtr(Request $request)
    {
        $data_otr = \App\Otr::select('model_no','otr','model_year')->where('model_no',$request->model_no)->first();

        return response()->json($data_otr);
    }

    public function cariTenure(Request $request)
    {
        $data_tenure = \App\Tenure::select('prod_type','year','rate','finalrate')->where('year',$request->year)->where('prod_type',$request->prod_type)->first();
        return response()->json($data_tenure);
    }

    public function cariBaseRate(Request $request)
    {
        $data_baseRate = \App\Base_Rate::select('prod_type','category_no','base_rate')->where('prod_type',$request->prod_type)->first();

        return response()->json($data_baseRate);
    }

    public function cariBaseRate2(Request $request)
    {
        $data_baseRate = \App\Base_Rate::select('prod_type','category_no','base_rate')->where('prod_type',$request->prod_type)->where('category_no',$request->category_no)->first();

        return response()->json($data_baseRate);
    }

    public function cariInsuPlacement(Request $request)
    {
        $data_InsuPlacement = \App\Addirate_Incins::select('prod_type','inctype_cd','inctype_nm','addirate')->where('prod_type',$request->prod_type)->take(10000)->get();
        
        return response()->json($data_InsuPlacement);
    }
    
    public function cariRateByInsu(Request $request)
    {
        $data_rateByInsu = \App\Addirate_Incins::select('prod_type','inctype_cd','inctype_nm','addirate')->where('prod_type',$request->prod_type)->where('inctype_cd',$request->inctype_cd)->first();
        return response()->json($data_rateByInsu);
    }

    public function cariRateInsuTjh(Request $request)
    {
        $data_rateInsuranceTjh = \App\Insurance_Type::select('disaster_type_no','ins_type_no','ins_type','from_val','to_val','fstyear','sndyear')->where('disaster_type_no',$request->disaster_type_no)->where('ins_type',$request->ins_type)->first();
        return response()->json($data_rateInsuranceTjh);
    }

    /*public function cariRateInsuPremium(Request $request)
    {
        $data_RateInsuPremium = \App\Insrate::select('ins_type','ins_no','from_val','to_val','fstyear','sndyear','vhc_type')->where('ins_type',$request->ins_type)->where('vhc_type',$request->vhc_type)->where('from_val',$request->from_val)->first();
        return response()->json($data_RateInsuPremium);
    }*/
    public function cariRateInsuPremium(Request $request)
    {
        $data_RateInsuPremium = \App\Insrate::select('ins_type','ins_no','from_val','to_val','fstyear','sndyear','vhc_type')->where('ins_type',$request->ins_type)->where('vhc_type',$request->vhc_type)->where('ins_no',$request->ins_no)->first();
        return response()->json($data_RateInsuPremium);
    }

    public function cariRateByDp(Request $request)
    {
        $data_rateDp = \App\Addirate_Dp::select('prod_type','dptype_cd','addirate','base_addirate')->where('prod_type',$request->prod_type)->where('dptype_cd',$request->dptype_cd)->first();
        return response()->json($data_rateDp);
    }

    public function cariModelRate(Request $request)
    {
        $data_modelRate = \App\Incentive_Rate::select('brand_id','model_no','model_rate','model_below_rate')->where('brand_id',$request->brand_id)->where('model_no',$request->model_no)->first();
        return response()->json($data_modelRate);
    }

    public function cariSalesRate(Request $request)
    {
        $data_salesRate = \App\Brand::select('brand_id','ord_no','brand_rate','spv_rate','majumtr_1stInctv','majumtr_2ndInctv')->where('brand_id',$request->brand_id)->first();
        return response()->json($data_salesRate);
    }
    public function cariAdmFeeDanProvisi(Request $request)
    {
        $data = \App\Additional_Fee::select('prod_type','adm_fee','provisi')->where('prod_type',$request->prod_type)->first();
        return response()->json($data);
    }

    

    public function tombolHitung(Request $request)
    {
        $data_brand = \App\Brand::all();
        $data_addInsurance = \App\Disaster_Type::all();
        $data_model = \App\TipeModel::select('brand_id','model_nm','model_no')->where('brand_id',$request->brand_id)->take(10000)->get();
        $data_otr = \App\Otr::select('model_no','otr','model_year')->where('model_no',$request->model_no)->first();
        $data_tenure = \App\Tenure::select('prod_type','year','rate','finalrate')->where('prod_type',$request->prod_type)->first();
        $data_baseRate = \App\Base_Rate::select('prod_type','category_no','base_rate')->where('prod_type',$request->prod_type)->first();
        $data_InsuPlacement = \App\Addirate_Incins::select('prod_type','inctype_cd','inctype_nm','addirate')->where('prod_type',$request->prod_type)->take(10000)->get();
        $data_rateInsurance = \App\Insurance_Type::select('disaster_type_no','ins_type_no','ins_type','from_val','to_val','fstyear','sndyear')->where('ins_type',$request->ins_type)->take(10000)->get();
        
        $data = [$data_brand,$data_addInsurance,$data_model,$data_otr,$data_tenure,$data_baseRate,$data_InsuPlacement,$data_rateInsurance];
        return response()->json($data);
    }
}
