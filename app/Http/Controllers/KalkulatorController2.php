<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\ServiceProvider;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use DB;

class KalkulatorController2 extends Controller
{
    public function index(Request $request)
    {
        // $data_brand = \App\Brand::all();
        $data_disasterType = \App\Oc_Disaster_Type::all();
        $data_wilayah = \App\Oc_Wilayah::all();
        // return view('Kalkulator.kalkulator2', ['data_brand' => $data_brand], ['data_disasterType' => $data_disasterType], ['data_wilayah' => $data_wilayah]);
        return view('Kalkulator.kalkulator2', ['data_disasterType' => $data_disasterType], ['data_wilayah' => $data_wilayah]);
    }

    //DB baru
    public function cariDealer2(Request $request){
        $data_dealer = \App\Dealer::select('wilayahID','dealerID','dealerName','productType')->where('wilayahID',$request->wilayahID)->where('productType',$request->productType)->take(10000)->get();
        return response()->json($data_dealer);
    }
    
    public function cariShowroom2(Request $request){
        $data_showroom = \App\Showroom::select('dealerID','showroomID','showroomName','showroomLocation','showroomBrand')->where('dealerID',$request->dealerID)->take(10000)->get();
        return response()->json($data_showroom);
    }
    
    public function cariBrand2(Request $request){
        $data_brand = \App\Showroom::select('dealerID','showroomID','showroomName','showroomLocation','showroomBrand')->where('showroomID',$request->showroomID)->first();
        return response()->json($data_brand);
    }

    public function cariPackage2(Request $request){
        $data_package = \App\Package::select('packageID','showroomID','packageName','adminFee','provisionRate','salesRate','spvRate','officeRate','incentiveCode','incentiveCodeMarketing')->where('showroomID',$request->showroomID)->take(10000)->get();
        return response()->json($data_package);
    }
    
    public function cariPackage_ModelRate2(Request $request){
        $data_package_model_rate = \App\Package_Model_Rate::select('packageID','modelID','otr','baseRate','modelRate','modelBelowRate')->where('packageID',$request->packageID)->where('modelID',$request->modelID)->first();
        return response()->json($data_package_model_rate);
    }

    public function cariPackage_YearRate2(Request $request){
        $data_package_year_rate = \App\Oc_Package_Year_Rate::select('packageID','modelYear','baseRate')->where('packageID',$request->packageID)->where('modelYear',$request->modelYear)->first();
        return response()->json($data_package_year_rate);
    }

    public function cariModel2(Request $request){
        $data_model = DB::table('oc_package_model_rate')
        // ->select('oc_model.modelID as modelID','Oc_Model.modelName as modelName','Showroom_Model_Rate.showroomID as showroomID')
        ->leftJoin('oc_model','oc_package_model_rate.modelID','=','oc_model.modelID')
        ->where('packageID',$request->packageID)
        ->take(10000)->get();
        return response()->json($data_model);
    }

    public function cariOtr2(Request $request){
        $data_otr = \App\Package_Model_Rate::select('packageID','modelID','otr','baseRate','modelRate','modelBelowRate')->where('packageID',$request->packageID)->where('modelID',$request->modelID)->first();
        return response()->json($data_otr);
    }

    public function cariInsuPlacement2(Request $request)
    {
        $data_InsuPlacement = \App\Package_Addirate_Ins::select('packageID','insrncTypeID','insrncTypeName','insrncTypeRate')->where('packageID',$request->packageID)->take(10000)->get();
        return response()->json($data_InsuPlacement);
    }

    public function cariAdmFeeDanProvisi2(Request $request)
    {
        $data = \App\Showroom_Package::select('packageID','showroomID','packageName','adminFee','provisionRate','salesRate','spvRate','officeRate','incentiveCode','incentiveCodeMarketing')->where('packageID',$request->packageID)->first();
        return response()->json($data);
    }

    public function cariSalesRate2(Request $request)
    {
        $data_salesRate = \App\Showroom_Package::select('packageID','showroomID','packageName','adminFee','provisionRate','salesRate','spvRate','officeRate','incentiveCode','incentiveCodeMarketing')->where('packageID',$request->packageID)->where('showroomID',$request->showroomID)->first();
        return response()->json($data_salesRate);
    }

    public function cariRateIncOffice2(Request $request)
    {
        $data_officeRate = \App\Showroom_Package::select('packageID','showroomID','packageName','adminFee','provisionRate','salesRate','spvRate','officeRate','incentiveCode','incentiveCodeMarketing')->where('packageID',$request->packageID)->where('showroomID',$request->showroomID)->first();
        return response()->json($data_officeRate);
    }

    public function cariVhcType2(Request $request)
    {
        $data_model = \App\Oc_Model::select('modelID','brandID','modelName','vehicleType')->where('modelID',$request->modelID)->first();
        return response()->json($data_model);
    }

    public function cariRateByDp2(Request $request)
    {
        $data_rateDp = \App\Oc_Package_Addi_Rate_Dp::select('packageID','dpType','addRate','baseAddRate','gap')->where('packageID',$request->packageID)->where('dpType',$request->dpType)->first();
        return response()->json($data_rateDp);
    }

    public function cariRateTenure2(Request $request)
    {
        $data_tenure = \App\Oc_Rate_Tenure::select('packageID','tenureYear','tenureRate','finalRate')->where('tenureYear',$request->tenureYear)->where('packageID',$request->packageID)->first();
        return response()->json($data_tenure);
    }

    public function cariRateByInsu2(Request $request)
    {
        $data_rateByInsu = \App\Oc_Package_Addi_Rate_Ins::select('packageID','insrncTypeID','insrncTypeName','insrncTypeRate')->where('packageID',$request->packageID)->where('insrncTypeID',$request->insrncTypeID)->first();
        return response()->json($data_rateByInsu);
    }

    public function cariRateInsuPremium2(Request $request)
    {
        $data_RateInsuPremium = \App\Oc_Ins_Rate::select('wilayahID','insrncTypeID','insrncNo','fromVal','toVal','firstYear','secondYear','vehicleType')->where('wilayahID',$request->wilayahID)->where('insrncTypeID',$request->insrncTypeID)->where('vehicleType',$request->vehicleType)->where('insrncNo',$request->insrncNo)->first();
        return response()->json($data_RateInsuPremium);
    }

    public function cariRateInsuTjh2(Request $request)
    {
        $data_rateInsuranceTjh = \App\Oc_Ins_Premium::select('wilayahID','disasterTypeID','insrncTypeNo','insrncType','fromVal','toVal','firstYear','secondYear')->where('wilayahID',$request->wilayahID)->where('disasterTypeID',$request->disasterTypeID)->where('insrncType',$request->insrncType)->first();
        return response()->json($data_rateInsuranceTjh);
    }
}
