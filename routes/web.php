<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', function () {
    return view('website.indexWeb');

});
Route::get('/indexWeb', function () {return view('website.indexWeb');});
Route::get('/corpInfo', function () {return view('website.about.corpInfo');});
Route::get('/kbFinancialGroup', function () {return view('website.about.kbFinancialGroup');});
Route::get('/kbCapital', function () {return view('website.about.kbCapital');});
Route::get('/sunMotorGroup', function () {return view('website.about.sunMotorGroup');});
Route::get('/CEOmessage', function () {return view('website.about.CEOmessage');});
Route::get('/managementPhi', function () {return view('website.about.managementPhi');});
Route::get('/organizationChart', function () {return view('website.about.organizationChart');});
Route::get('/BoDandAuditComm', function () {return view('website.about.BoDandAuditComm');});

Route::get('/prodInfo', function () {return view('website.financialProd.prodInfo');});

Route::get('/skbfNews', function () {return view('website.newsAndActivities.skbfNews');});
Route::get('/financialNews', function () {return view('website.newsAndActivities.financialNews');});
Route::get('/socialActivities', function () {return view('website.newsAndActivities.socialActivities');});
Route::get('/ojk', function () {return view('website.newsAndActivities.ojk');});

Route::get('/simulationCust', function () {return view('website.simulation.simulationCust');});

Route::get('/careerWithSKBF', function () {return view('website.career.careerWithSKBF');});
Route::get('/customerInfo', function () {return view('website.customer.customerInfo');});
Route::get('/contact', function () {return view('website.contactUs.contact');});

Route::get('/loginKalkulator','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:1,2']],function(){
    Route::get('/user','UserController@index');
    Route::POST('/user/create','UserController@create');
    Route::get('/user/{id}/edit','UserController@edit');
    Route::POST('/user/{id}/update','UserController@update');
    Route::POST('/user/{id}/profile','UserController@profile');
    Route::get('/user/{id}/delete','UserController@delete');
    
    Route::get('/baseRate','BaseRateController@index');

    
});
Route::group(['middleware' => ['auth','checkRole:1,2,3']],function(){
    Route::get('/model','ModelController@index');
    Route::POST('/model/create','ModelController@create');
    Route::get('/model/{id}/edit','ModelController@edit');
    Route::POST('/model/{id}/update','ModelController@update');
    Route::get('/model/{id}/delete','ModelController@delete');

    Route::get('/brand','BrandController@index');
    Route::POST('/brand/create','BrandController@create');
    Route::get('/brand/{id}/edit','BrandController@edit');
    Route::POST('/brand/{id}/update','BrandController@update');
    Route::get('/brand/{id}/delete','BrandController@delete');

    Route::get('/otr','OtrController@index');
    Route::POST('/otr/create','OtrController@create');
    Route::get('/otr/{id}/edit','OtrController@edit');
    Route::POST('/otr/{id}/update','OtrController@update');
    Route::get('/otr/{id}/delete','OtrController@delete');

    Route::get('/incentiveRate','IncentiveRateController@index');
    Route::POST('/incentiveRate/create','IncentiveRateController@create');
    Route::get('/incentiveRate/{id}/edit','IncentiveRateController@edit');
    Route::POST('/incentiveRate/{id}/update','IncentiveRateController@update');
    Route::get('/incentiveRate/{id}/delete','IncentiveRateController@delete');

    // management OC baru
    Route::get('/OcBrand','OC\brandController@index');
    Route::POST('/OcBrand/create','OC\brandController@create');
    Route::get('/OcBrand/{brandID}/edit','OC\brandController@edit');
    Route::POST('/OcBrand/{brandID}/update','OC\brandController@update');
    Route::get('/OcBrand/{brandID}/delete','OC\brandController@delete');

    Route::get('/OcDealer','OC\dealerController@index');
    Route::POST('/OcDealer/create','OC\dealerController@create');
    Route::POST('/OcDealer/{dealerID}/update','OC\dealerController@update');
    Route::get('/OcDealer/{dealerID}/delete','OC\dealerController@delete');

    Route::get('/OcInsPremium','OC\insPremiumController@index');
    Route::POST('/OcInsPremium/create','OC\insPremiumController@create');
    Route::POST('/OcInsPremium/{insrncPremiumID}/update','OC\insPremiumController@update');
    Route::get('/OcInsPremium/{insrncPremiumID}/delete','OC\insPremiumController@delete');
});
Route::group(['middleware' => ['auth','checkRole:1,2,3,4']],function(){
    Route::get('index', function()
        {
            return view('index');
        }
    );
    Route::get('profile', function()
        {
            return view('Profile.profile');
        }
    );

    Route::POST('/user/{id}/profile','UserController@profile');

    Route::get('/kalkulator','KalkulatorController@index');
    Route::get('/findModel','KalkulatorController@findModel');
    Route::get('/cariVhcType','KalkulatorController@cariVhcType');
    Route::get('/cariModelRate','KalkulatorController@cariModelRate');
    Route::get('/cariOtr','KalkulatorController@cariOtr');
    Route::get('/cariTenure','KalkulatorController@cariTenure');
    Route::get('/cariRateByDp','KalkulatorController@cariRateByDp');
    Route::get('/cariBaseRate','KalkulatorController@cariBaseRate');
    Route::get('/cariSalesRate','KalkulatorController@cariSalesRate');
    Route::get('/cariBaseRate2','KalkulatorController@cariBaseRate2');
    Route::get('/cariInsuPlacement','KalkulatorController@cariInsuPlacement');
    Route::get('/cariRateByInsu','KalkulatorController@cariRateByInsu');
    Route::get('/cariRateInsu','KalkulatorController@cariRateInsu');
    Route::get('/cariRateInsuTjh','KalkulatorController@cariRateInsuTjh');
    Route::get('/cariRateInsuPremium','KalkulatorController@cariRateInsuPremium');
    Route::get('/cariAdmFeeDanProvisi','KalkulatorController@cariAdmFeeDanProvisi');
    Route::get('/tombolHitung','KalkulatorController@tombolHitung');
    Route::get('/kalkulator/printPdf','KalkulatorController@printPdf');

    Route::get('/kalkulator2','KalkulatorController2@index');
    Route::get('/cariDealer2','KalkulatorController2@cariDealer2');
    Route::get('/cariShowroom2','KalkulatorController2@cariShowroom2');
    Route::get('/cariPackage2','KalkulatorController2@cariPackage2');
    Route::get('/cariPackage_ModelRate2','KalkulatorController2@cariPackage_ModelRate2');
    Route::get('/cariPackage_YearRate2','KalkulatorController2@cariPackage_YearRate2');
    Route::get('/cariModel2','KalkulatorController2@cariModel2');
    Route::get('/cariOtr2','KalkulatorController2@cariOtr2');
    Route::get('/cariInsuPlacement2','KalkulatorController2@cariInsuPlacement2');
    Route::get('/cariAdmFeeDanProvisi2','KalkulatorController2@cariAdmFeeDanProvisi2');
    Route::get('/cariSalesRate2','KalkulatorController2@cariSalesRate2');
    Route::get('/cariRateIncOffice2','KalkulatorController2@cariRateIncOffice2');
    Route::get('/cariVhcType2','KalkulatorController2@cariVhcType2');
    Route::get('/cariRateByDp2','KalkulatorController2@cariRateByDp2');
    Route::get('/cariRateTenure2','KalkulatorController2@cariRateTenure2');
    Route::get('/cariRateByInsu2','KalkulatorController2@cariRateByInsu2');
    Route::get('/cariRateInsuPremium2','KalkulatorController2@cariRateInsuPremium2');
    Route::get('/cariRateInsuTjh2','KalkulatorController2@cariRateInsuTjh2');
    Route::get('/cariBrand2','KalkulatorController2@cariBrand2');

});
