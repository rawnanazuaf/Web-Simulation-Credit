@extends('layouts.master')

@section('content')
<main id="main">    
    <!-- ======= Team Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <br>
            <div id="printDiv" name="printDiv">
                <div class="judul">
                    <img src="login/images/login_logo2.png" style="text-align: center;">
                    <br>
                    <h4 id="h4">CREDIT SIMULATION</h4>
                    <br>
                </div>
                <div style="margin: 0 auto;">
		            <div style="max-width: 885px;margin: 0 auto;">
                        <table class="table_row" id="tableCalcu" name="tableCalcu" onLoad="getDateTime()">
                        <div id="userDanTanggal">
                            User    : {{auth()->user()->username}} <br>
                            Date    : <div id="digital-clock"></div>
                        </div>
                        <br><br>
                        <colgroup>
                            <col style="width:32%;">
                            <col style="width:24%;">
                            <col style="width:22%;">
                            <col style="width:22%;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th scope="col">Product Type</th>
                                <td colspan="3">
                                <select name="prodType_tb" id="prodType_tb" class="sim-form-control">
                                    <option value="0" disabled="true" selected="true">-Select-</option>
                                    <option value="NCIB">New Car Type 1</option>
                                    <!-- <option value="NCPB">New Car Type 2</option> -->
                                    <option value="NCIBS">New Car Type 3</option>
                                    <option value="OCRF">Refinancing HEBAT</option>
                                    <option value="OCRH">Refinancing HEMAT</option>
                                    <option value="OCIB">Used Car Type 1</option>
                                    <option value="OCPB">Used Car Type 2</option>
                                    <!-- <option value="GP">Grace Period</option>
                                    <option value="GG">Balloon Installment</option> -->
                                </select>
                                </td>
                            </tr>
                            <tr id="brand_tr">
                                <th>Brand</th>
                                <td colspan="3">
                                <select id="brand_tb" name="brand_tb" class="sim-form-control">
                                    <option value="0" disabled="true" selected="true">-Select-</option>
                                    @foreach($data_brand as $brand)
                                    <option value="{{ $brand->brand_id }}"> {{ $brand->brand_id }} </option>
                                    @endforeach
                                </select>
                                </td>
                            </tr>
                            <tr id="vehicleTr">
                                <th>Vehicle Type</th>
                                <td colspan="3">
                                    <select name="vehicleType" id="vehicleType" class="sim-form-control">
                                        <option value="0" disabled="true" selected="true">-Select-</option>
                                        <option value="PSG">Passenger</option>
                                        <option value="CMC">Commercial</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Model</th>
                                <td colspan="3">
                                    <select name="model_tb" id="model_tb" class="sim-form-control">
                                        <option value="0" disabled="true" selected="true"></option>  
                                    </select>
                                    <input type="text" name="model2_tb" id="model2_tb" class="sim-form-control">
                                </td>
                            </tr>
                            <tr id="vhcType_tr">
                                <th>Vehicle Type</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="vhcType_tb" id="vhcType_tb">
                                </td>
                            </tr>
                            <tr id="category_no_tr">
                                <th>Category No</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="category_no_tb" id="category_no_tb">
                                </td>
                            </tr>
                            
                            <tr>
                                <th>OTR</th>
                                <td style="width:40%">
                                    <input type="text" class="sim-form-control" name="otr_tb" id="otr_tb">
                                    <input type="text" class="sim-form-control" name="otr2_tb" id="otr2_tb">
                                </td>
                                <td style="width:10%">Year</td>
                                <td style="width:40%">
                                    <input type="text" class="sim-form-control" name="year_tb" id="year_tb">
                                    <input type="text" class="sim-form-control" name="year2_tb" id="year2_tb">
                                </td>
                            </tr>
                            <tr>
                                <th>Discount</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="discount_tb" id="discount_tb">
                                </td>
                            </tr>
                            <tr id="payType_tr">
                                <th>Payment Type</th>
                                <td colspan="3">
                                    <select name="payType_tb" id="payType_tb" class="sim-form-control">
                                        <option value="0" disabled="true" selected="true">-Select-</option>
                                    </select>
                                </td>
                            </tr>
                            <tr id="balloonRate_tr">
                                    <th>Balloon Rate</th>
                                    <td colspan="3">
                                        <select name="balloonRate" id="balloonRate" class="sim-form-control">
                                            <option value="5">5 %</option>
                                            <option value="10">10 %</option>
                                            <option value="15">15 %</option>
                                            <option value="20">20 %</option>
                                            <option value="30">30 %</option>
                                        </select>
                                    </td>
                                </tr>
                            <tr>
                                <th>DP</th>
                                <td>
                                    <select name="dp_tb" id="dp_tb" class="sim-form-control">
                                        <option value="0" disabled="true" selected="true">-Select-</option>
                                        <option value="10">10 %</option>
                                        <option value="15">15 %</option>
                                        <option value="20">20 %</option>
                                        <option value="25">25 %</option>
                                        <option value="30">30 %</option>
                                        <option value="35">35 %</option>
                                        <option value="40">40 %</option>
                                        <option value="45">45 %</option>
                                        <option value="50">50 %</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="sim-form-control" name="dp2_tb" id="dp2_tb" style="width:65%;">&nbsp;%
                                </td>
                                <td>
                                    <input type="text" class="sim-form-control" name="hasildp_tb" id="hasildp_tb">
                                </td>
                            </tr>
                            <tr>
                                <th>Loaned Amount</th>
                                <td colspan="3">
                                    <input type="text" readonly="readonly" class="sim-form-control" name="lnAmt_tb" id="lnAmt_tb">
                                </td>
                            </tr>
                            <tr>
                                <th>Tenure</th>
                                <td colspan="3">
                                    <select name="tenure_tb" id="tenure_tb" class="sim-form-control">
                                        
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Insurance</th>
                                <td>
                                    <select name="insu_tb" id="insu_tb" class="sim-form-control">
                                        <option value='0' disabled="true" selected="true">-Select-</option>
                                        <option value='CP'>CP</option>
                                        <option value='TLO'>TLO</option>
                                        <option value='CB'>CB</option>
                                    </select>
                                </td>
                                <td colspan="2">
                                    <select name="insuName_tb" id="insuName_tb" class="sim-form-control">
                                        <option >KB INSURANCE</option>
                                        <option>TUGU INSURANCE</option>
                                        <option>MEGA PRATAMA INSURANCE</option>
                                        <option>TOB INSURANCE</option>
                                        <option>INTRA ASIA</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Ins. Placement</th>
                                <td colspan="3">
                                    <select name="insuPlace_tb" id="insuPlace_tb" class="sim-form-control">
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Add. Insurance 1</th>
                                <td colspan="2">
                                    <select name="disaster1_tb" id="disaster1_tb" class="sim-form-control">
                                        <option value="0" disabled="true" selected="true">-Select-</option>
                                        @foreach($data_addInsurance as $ai)
                                        <option value="{{ $ai->disaster_type_no }}"> {{ $ai->disaster_type }} </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="button" style="width:100%" class="btn btn-dark btn-round px-5" value="Add" id="tombolTambahDis2" name="tombolTambahDis2">
                                </td>
                            </tr>
                            <tr id="disaster2_tr">
                                <th>Add. Insurance 2</th>
                                <td colspan="2">
                                    <select name="disaster2_tb" id="disaster2_tb" class="sim-form-control">
                                        <option value="0" disabled="true" selected="true">-Select-</option>
                                        @foreach($data_addInsurance as $ai)
                                        <option value="{{ $ai->disaster_type_no }}"> {{ $ai->disaster_type }} </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="button" style="width:100%" class="btn btn-dark btn-round px-5" value="Add" id="tombolTambahDis3" name="tombolTambahDis3">
                                </td>
                            </tr>
                            <tr id="disaster3_tr">
                                <th>Add. Insurance 3</th>
                                <td colspan="2">
                                    <select name="disaster3_tb" id="disaster3_tb" class="sim-form-control">
                                        <option value="0" disabled="true" selected="true">-Select-</option>
                                        @foreach($data_addInsurance as $ai)
                                        <option value="{{ $ai->disaster_type_no }}"> {{ $ai->disaster_type }} </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="button" style="width:100%" class="btn btn-dark btn-round px-5" value="Add" id="tombolTambahDis4" name="tombolTambahDis4">
                                </td>
                            </tr>
                            <tr id="disaster4_tr">
                                <th>Add. Insurance 4</th>
                                <td colspan="2">
                                    <select name="disaster4_tb" id="disaster4_tb" class="sim-form-control">
                                        <option value="0" disabled="true" selected="true">-Select-</option>
                                        @foreach($data_addInsurance as $ai)
                                        <option value="{{ $ai->disaster_type_no }}"> {{ $ai->disaster_type }} </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="button" style="width:100%" class="btn btn-dark btn-round px-5" value="Add" id="tombolTambahDis5" name="tombolTambahDis5">
                                </td>
                            </tr>
                            <tr id="disaster5_tr">
                                <th>Add. Insurance 5</th>
                                <td colspan="2">
                                    <select name="disaster5_tb" id="disaster5_tb" class="sim-form-control">
                                        <option value="0" disabled="true" selected="true">-Select-</option>
                                        @foreach($data_addInsurance as $ai)
                                        <option value="{{ $ai->disaster_type_no }}"> {{ $ai->disaster_type }} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <!--TJH New Car 1-->
                            <tr>
                                <th>(Third Party Liability)</th>
                                <td>
                                    <input name="tjh" id="tjh" type="text" class="sim-form-control">
                                </td>
                                <td>
                                    <div id="tjhRate_div">
                                        <input name="tjhRate" id="tjhRate" type="text" class="sim-form-control" value="1" style="width:65%;">&nbsp;%
                                    </div>
                                    <div id="tjhRateNCIBS_div">
                                        <input name="tjhRateNCIBS" id="tjhRateNCIBS" type="text" class="sim-form-control" value="1.50" style="width:65%;">&nbsp;%
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="sim-form-control" name="tjhVal" id="tjhVal">
                                </td>
                            </tr>
                            <tr>
                                <th>(Third Party Liability)</th>
                                <td>
                                    <input name="tjh2" id="tjh2" type="text" class="sim-form-control">
                                </td>
                                <td>
                                    <div id="tjhRate2_div">
                                        <input name="tjhRate2" id="tjhRate2" type="text" class="sim-form-control" value="0.5" style="width:65%;">&nbsp;%
                                    </div>
                                    <div id="tjhRate2NCIBS_div">
                                        <input name="tjhRate2NCIBS" id="tjhRate2NCIBS" type="text" class="sim-form-control" value="0.75" style="width:65%;">&nbsp;%
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="sim-form-control" name="tjhVal2" id="tjhVal2">
                                </td>
                            </tr>
                            <tr>
                                <th>(Third Party Liability)</th>
                                <td>
                                    <input name="tjh3" id="tjh3" type="text" class="sim-form-control">
                                </td>
                                <td>
                                    <div id="tjhRate3_div">
                                        <input name="tjhRate3" id="tjhRate3" type="text" class="sim-form-control" value="0.25" style="width:65%;">&nbsp;%
                                    </div>
                                    <div id="tjhRate3NCIBS_div">
                                        <input name="tjhRate3NCIBS" id="tjhRate3NCIBS" type="text" class="sim-form-control" value="0.38" style="width:65%;">&nbsp;%
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="sim-form-control" name="tjhVal3" id="tjhVal3">
                                </td>
                            </tr>
                            
                            <tr>
                                <th>(CLIP)</th>
                                <td>
                                    <select id="clip" name="clip" class="sim-form-control" >
                                        <!-- <option value="0" disabled="true" selected="true">-Select-</option> -->
                                        <option value="0">Not Include</option>
                                        <option value="1">Include</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="sim-form-control" id="clipRate" name="clipRate" value="0.3" style="width:65%;">&nbsp;%
                                </td>
                                <td>
                                    <input type="text" class="sim-form-control" id="clipVal" name="clipVal">
                                </td>
                            </tr>
                            <tr>
                                <th>(Passenger Injury)</th>
                                <td>
                                    <input type="text" class="sim-form-control" name="passenger" id="passenger">
                                </td>
                                <td>
                                    <input type="text" class="sim-form-control" name="passengerRate" id="passengerRate" value="0.5" style="width:65%;">&nbsp;%
                                </td>
                                <td>
                                    <input type="text" class="sim-form-control" name="passengerVal" id="passengerVal">
                                </td>
                            </tr>
                            <tr>
                                <th>(PAP)</th>
                                <td>
                                    <select id="pap" name="pap" class="sim-form-control" >
                                        <!-- <option value="0" disabled="true" selected="true">-Select-</option> -->
                                        <option value="0">Not Include</option>
                                        <option value="1">Include</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="sim-form-control" name="papRate" id="papRate" value="0.4" style="width:65%;">&nbsp;%
                                </td>
                                <td>
                                    <input type="text" class="sim-form-control" name="papVal" id="papVal">
                                </td>
                            </tr>
                            <tr>
                                <th>(PAD)</th>
                                <td>
                                    <select id="pad" name="pad" class="sim-form-control" >
                                        <!-- <option value="0" disabled="true" selected="true">-Select-</option> -->
                                        <option value="0">Not Include</option>
                                        <option value="1">Include</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="sim-form-control" name="padRate" id="padRate" value="0.5" style="width:65%;">&nbsp;%
                                </td>
                                <td>
                                    <input type="text" class="sim-form-control" name="padVal" id="padVal">
                                </td>
                            </tr>
                            <tr id="persenanSales_tr">
                                <th>Percentage of Sales</th>
                                <td  colspan="3">
                                    <input type="text" class="sim-form-control" name="persenanSales_tb" id="persenanSales_tb" placeholder="Masukkan angka saja tidak perlu simbol persen % ">
                                </td>
                            </tr>
                            <tr id="tdp_tr">
                                <th>TDP</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="tDp_tb" id="tDp_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="angsuran_tr">
                                <th>Installment</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="angsuran_tb" id="angsuran_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="pencairanPel_tr">
                                <th id="pencairanPelunasan_tt">Pencairan Pelunasan</th>
                                <th id="pencairan_tt">Pencairan</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="pencairanPel_tb" id="pencairanPel_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="pencairanPel2_tr">
                                <th>Pencairan Pelunasan</th>
                                <td >
                                    <input type="text" class="sim-form-control" name="pencairanPel2_tb" id="pencairanPel2_tb" value=" ">
                                </td>
                                <td>All in</td>
                                <td >
                                    <input type="text" class="sim-form-control" name="allIn_tb" id="allIn_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="flatRate_tr">
                                <th>Flat rate</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="flatRate_tb" id="flatRate_tb"value=" ">
                                </td>
                            </tr>
                            
                            <tr id="effectiveRate_tr">
                                <th>Effective Rate</th>
                                <td>
                                    <input type="text" class="sim-form-control" name="effectiveRate_tb" id="effectiveRate_tb"value=" ">
                                </td>
                                <td id="totalInc_tt">Total Incentive</td>
                                <td id="salesInc_tt">Sales Incentive</td>
                                <td>
                                    <input type="text" class="sim-form-control" name="salesInc_tb" id="salesInc_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="totInsu_tr">
                                <th>Total Insurance</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="totInsu_tb" id="totInsu_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="totInterest_tr">
                                <th>Total Interest</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="totInterest_tb" id="totInterest_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="allIncome_tr">
                                <th>All Income</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="allIncome_tb" id="allIncome_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="model_rate_tr">
                                <th>Model Rate</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="model_rate_tb" id="model_rate_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="model_below_rate_tr">
                                <th>Model Below Rate</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="model_below_rate_tb" id="model_below_rate_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="rateBD_tr">
                                <th>Rate By Dp</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="rateBD_tb" id="rateBD_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="rateBT_tr">
                                <th>Rate By Tenure</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="rateBT_tb" id="rateBT_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="finalRBT_tr">
                                <th>Final Rate By Tenure</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="finalRBT_tb" id="finalRBT_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="rateBI_tr">
                                <th>Rate By Insurance</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="rateBI_tb" id="rateBI_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="rateInsuPremium1_tr">
                                <th>Rate Insurance Premium Tahun 1</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="rateInsuPremium1_tb" id="rateInsuPremium1_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="rateInsuPremium2_tr">
                                <th>Rate Insurance Premium Tahun 2</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="rateInsuPremium2_tb" id="rateInsuPremium2_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="rateInsuPremium3_tr">
                                <th>Rate Insurance Premium Tahun 3</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="rateInsuPremium3_tb" id="rateInsuPremium3_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="rateInsuPremium4_tr">
                                <th>Rate Insurance Premium Tahun 4</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="rateInsuPremium4_tb" id="rateInsuPremium4_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="rateInsuPremium5_tr">
                                <th>Rate Insurance Premium Tahun 5</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="rateInsuPremium5_tb" id="rateInsuPremium5_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="addInsu1th1_tr">
                                <th>Add Insu 1 TH 1</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="addInsu1th1_tb" id="addInsu1th1_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="addInsu1th2_tr">
                                <th>Add Insu 1 TH 2</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="addInsu1th2_tb" id="addInsu1th2_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="addInsu2th1_tr">
                                <th>Add Insu 2 TH 1</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="addInsu2th1_tb" id="addInsu2th1_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="addInsu2th2_tr">
                                <th>Add Insu 2 TH 2</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="addInsu2th2_tb" id="addInsu2th2_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="addInsu3th1_tr">
                                <th>Add Insu 3 TH 1</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="addInsu3th1_tb" id="addInsu3th1_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="addInsu3th2_tr">
                                <th>Add Insu 3 TH 2</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="addInsu3th2_tb" id="addInsu3th2_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="addInsu4th1_tr">
                                <th>Add Insu 4 TH 1</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="addInsu4th1_tb" id="addInsu4th1_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="addInsu4th2_tr">
                                <th>Add Insu 4 TH 2</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="addInsu4th2_tb" id="addInsu4th2_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="addInsu5th1_tr">
                                <th>Add Insu 5 TH 1</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="addInsu5th1_tb" id="addInsu5th1_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="addInsu5th2_tr">
                                <th>Add Insu 5 TH 2</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="addInsu5th2_tb" id="addInsu5th2_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="hasilFOR_tr">
                                <th>Final Offerd Rate</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="hasilFOR_tb" id="hasilFOR_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="pmtEffective_tr">
                                <th>PMT Effective</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="pmtEffective_tb" id="pmtEffective_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="base_rate_tr">
                                <th>Base Rate</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="base_rate_tb" id="base_rate_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="dealerComm_tr">
                                <th>Dealer Comm</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="dealerComm_tb" id="dealerComm_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="incOffice_tr">
                                <th>Incentive Office</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="incOffice_tb" id="incOffice_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="incNonOffice_tr">
                                <th>Incentive Non Office</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="incNonOffice_tb" id="incNonOffice_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="insuPrice_tr">
                                <th>Insurance Price</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="insuPrice_tb" id="insuPrice_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="insuPrice2_tr">
                                <th>Insurance Price 2</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="insuPrice2_tb" id="insuPrice2_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="insuPrice3_tr">
                                <th>Insurance Price 3</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="insuPrice3_tb" id="insuPrice3_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="insuPrice4_tr">
                                <th>Insurance Price 4</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="insuPrice4_tb" id="insuPrice4_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="sales_rate_tr">
                                <th>Sales Rate</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="sales_rate_tb" id="sales_rate_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="admFee_tr">
                                <th>Admin Fee</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="admFee_tb" id="admFee_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="provisi_tr">
                                <th>Provisi</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="provisi_tb" id="provisi_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="hasilProvisi_tr">
                                <th>Hasil Provisi</th>
                                <td colspan="3">
                                    <input type="text" class="sim-form-control" name="hasilProvisi_tb" id="hasilProvisi_tb" value=" ">
                                </td>
                            </tr>
                            <tr id="btnTr">
                                <td colspan="4">
                                    <input type="button" class="btn btn-dark btn-round px-5" value="Calculate" name="tombolHitung" id="tombolHitung">
                                    <input type="button" class="btn btn-dark btn-round px-5" value="Print" id="tombolPrint" name="tombolPrint">
                                    <input type="button" class="btn btn-dark btn-round px-5" value="Referesh" id="tombolReset" name="tombolReset">
                                </td>
                            </tr>
                            <tr style="border-bottom: 0px;">
                                <td colspan="4" style="text-align:center;">
                                <span style="font-size:13px;color:red;font-weight:bold;"> 
                                        * Perhitungan simulasi ini bukan merupakan persetujuan kredit.
                                        Skema perhitungan dapat berubah sewaktu-waktu.
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>        
            </div>
        
        </div>
    </section><!-- End Team Section -->
</main>
<script type="text/javascript">
    $(document).ready(function(){    
    //menampilkan current date
    function getDateTime() {
        var now     = new Date(); 
        var year    = now.getFullYear();
        var month   = now.getMonth()+1; 
        var day     = now.getDate();
        var hour    = now.getHours();
        var minute  = now.getMinutes();
        var second  = now.getSeconds(); 
        if(month.toString().length == 1) {
             month = '0'+month;
        }
        if(day.toString().length == 1) {
             day = '0'+day;
        }   
        if(hour.toString().length == 1) {
             hour = '0'+hour;
        }
        if(minute.toString().length == 1) {
             minute = '0'+minute;
        }
        if(second.toString().length == 1) {
             second = '0'+second;
        }   
        //var dateTime = year+'/'+month+'/'+day+' '+hour+':'+minute+':'+second;   
        var dateTime = day+'/'+month+'/'+year+' '+hour+':'+minute+':'+second;   
         return dateTime;
    }

    // example usage: realtime clock
    setInterval(function(){
        currentTime = getDateTime();
        document.getElementById("digital-clock").innerHTML = currentTime;
    }, 1000);


    //menyembunyikan kolom
    $("#totInterest_tr").hide();
    $("#allIncome_tr").hide();
    $("#model_rate_tr").hide();
    $("#model_below_rate_tr").hide();
    $("#dealerComm_tr").hide();
    $("#incOffice_tr").hide();
    $("#incNonOffice_tr").hide();
    $("#vhcType_tr").hide();
    $("#base_rate_tr").hide();
    $("#rateBD_tr").hide();
    $("#rateBT_tr").hide();
    $("#rateBI_tr").hide();
    $("#rateInsuPremium1_tr").hide();
    $("#rateInsuPremium2_tr").hide();
    $("#rateInsuPremium3_tr").hide();
    $("#rateInsuPremium4_tr").hide();
    $("#rateInsuPremium5_tr").hide();
    $("#addInsu1th1_tr").hide();
    $("#addInsu1th2_tr").hide();
    $("#addInsu2th1_tr").hide();
    $("#addInsu2th2_tr").hide();
    $("#addInsu3th1_tr").hide();
    $("#addInsu3th2_tr").hide();
    $("#addInsu4th1_tr").hide();
    $("#addInsu4th2_tr").hide();
    $("#addInsu5th1_tr").hide();
    $("#addInsu5th2_tr").hide();
    $("#hasilFOR_tr").hide();
    $("#pmtEffective_tr").hide();
    $("#category_no_tr").hide();
    $("#finalRBT_tr").hide();
    $("#insuPrice_tr").hide();
    $("#insuPrice2_tr").hide();
    $("#insuPrice3_tr").hide();
    $("#insuPrice4_tr").hide();
    $("#sales_rate_tr").hide();
    $("#admFee_tr").hide();
    $("#provisi_tr").hide();
    $("#year2_tb").hide();
    $("#model2_tb").hide();
    $("#vehicleTr").hide();
    $("#pencairan_tt").hide();
    $("#pencairanPel2_tr").hide();
    $("#totalInc_tt").hide();
    $("#balloonRate_tr").hide();
    $("#persenanSales_tr").hide();
    $("#otr2_tb").hide();
    $("#tjhRateNCIBS_div").hide();
    $("#tjhRate2NCIBS_div").hide();
    $("#tjhRate3NCIBS_div").hide();
    $("#tdp_tr").hide();
    $("#angsuran_tr").hide();
    $("#pencairanPel_tr").hide();
    $("#flatRate_tr").hide();
    $("#effectiveRate_tr").hide();
    $("#totInsu_tr").hide();
    $("#disaster2_tr").hide();
    $("#disaster3_tr").hide();
    $("#disaster4_tr").hide();
    $("#disaster5_tr").hide();
    $("#userDanTanggal").hide();
    $("#sidebar-wrapper").hide();
    $("#button-sidebar").hide();
    $("#hasilProvisi_tr").hide();
    
    //format ribuan
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
    }

    //pembulatan
    function decimalAdjust(type, value, exp) {
        // If the exp is undefined or zero...
        if (typeof exp === 'undefined' || +exp === 0) {
        return Math[type](value);
        }
        value = +value;
        exp = +exp;
        // If the value is not a number or the exp is not an integer...
        if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
        return NaN;
        }
        // Shift
        value = value.toString().split('e');
        value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
        // Shift back
        value = value.toString().split('e');
        return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
    }

    // Decimal round
    if (!Math.round10) {
        Math.round10 = function(value, exp) {
        return decimalAdjust('round', value, exp);
        };
    }
    // Decimal floor
    if (!Math.floor10) {
        Math.floor10 = function(value, exp) {
        return decimalAdjust('floor', value, exp);
        };
    }
    // Decimal ceil
    if (!Math.ceil10) {
        Math.ceil10 = function(value, exp) {
        return decimalAdjust('ceil', value, exp);
        };
    };



    //fungsi-fungsi
        function cariProdType(){
            var prod_type = $("#prodType_tb").val();
            console.log(prod_type);
            
            if (prod_type == "OCIB" || prod_type == "OCPB") {//usedcar
                        $("#year_tb").hide();
                        $("#year2_tb").show();
                        $("#model_tb").hide();
                        $("#model2_tb").show();			
                        $("#brand_tr").hide();
                        $("#vehicleTr").show();
                        $("#pencairanPel_tr").hide();
                        $("#pencairan_tt").hide();
                        $("#pencairanPelunasan_tt").hide();
                        $("#pencairanPel2_tr").hide();
                        $("#allIn_tb").show();
                        $("#totalInc_tt").show();
                        $("#salesInc_tt").hide();
                        $("#persenanSales_tr").show();
                        $("#tjhRateNCIBS_div").hide();
                        $("#tjhRate3NCIBS_div").hide();
                        $("#tjhRate2NCIBS_div").hide();
                        $("#tjhRate2_div").show();
                        $("#tjhRate_div").show();
                        $("#tjhRate3_div").show();
                    } else if (prod_type == "NCIBS") {//new car type 3
                        $("#persenanSales_tr").show();
                    } else if (prod_type == "OCRF" || prod_type == "OCRH") {//refinancing
                        $("#year_tb").hide();
                        $("#year2_tb").show();
                        $("#model_tb").hide();
                        $("#model2_tb").show();			
                        $("#brand_tr").hide();
                        $("#vehicleTr").show();
                        $("#pencairan_tt").show();
                        $("#pencairanPelunasan_tt").hide();
                        $("#totalInc_tt").show();
                        $("#salesInc_tt").hide();
                        $("#allIn_tt").hide();
                        $("#allIn_tb").hide();
                        $("#tjhRateNCIBS_div").hide();
                        $("#tjhRate3NCIBS_div").hide();
                        $("#tjhRate2NCIBS_div").hide();
                        $("#tjhRate2_div").show();
                        $("#tjhRate_div").show();
                        $("#tjhRate3_div").show();
                    } else if (prod_type == "GG") {//balloon
                        $("#payType_tr").hide();
                        $("#balloonRate_tr").show();
                        $("#year_tb").show();
                        $("#year2_tb").hide();
                        $("#model_tb").show();
                        $("#model2_tb").hide();
                        $("#brand_tr").show();
                        $("#vehicleTr").hide();
                        $("#pencairan_tt").hide();
                        $("#pencairanPelunasan_tt").show();
                        $("#totalInc_tt").hide();
                        $("#salesInc_tt").show();
                        $("#allIn_tt").hide();
                        $("#allIn_tb").hide();
                        $("#tjhRateNCIBS_div").hide();
                        $("#tjhRate3NCIBS_div").hide();
                        $("#tjhRate2NCIBS_div").hide();
                        $("#tjhRate2_div").show();
                        $("#tjhRate_div").show();
                        $("#tjhRate3_div").show();
                    } else {//grace period
                        $("#payType_tr").show();
                        $("#balloonRate_tr").hide();
                        $("#year_tb").show();
                        $("#year2_tb").hide();
                        $("#model_tb").show();
                        $("#model2_tb").hide();
                        $("#brand_tr").show();
                        $("#vehicleTr").hide();
                        $("#pencairan_tt").hide();
                        $("#pencairanPelunasan_tt").show();
                        $("#totalInc_tt").hide();
                        $("#salesInc_tt").show();
                        $("#allIn_tt").hide();
                        $("#allIn_tb").hide();
                        $("#tjhRateNCIBS_div").hide();
                        $("#tjhRate3NCIBS_div").hide();
                        $("#tjhRate2NCIBS_div").hide();
                        $("#tjhRate2_div").show();
                        $("#tjhRate_div").show();
                        $("#tjhRate3_div").show();
                    }

            var html = "";

            $.ajax({
                type:'get',
                url:'{!!URL::to('cariBaseRate')!!}',
                data:{'prod_type':prod_type},
                dataType:'json',
                success:function(data){
                    var ss_prodType = prod_type.substring(0,2);
                    console.log(ss_prodType);
                    
                    var pymtTypeOptions = "";
                    pymtTypeOptions+='<option value="0" selected disabled>-Select-</option>';
                    if (ss_prodType == "NC" || ss_prodType == "OC") {
                        pymtTypeOptions += "<option value='ADDM'>ADDM</option>";
                        pymtTypeOptions += "<option value='ADDB'>ADDB</option>";
                    } else if (prod_type == "GP") {
                        pymtTypeOptions += "<option value='Grace Period'>Grace Period</option>";
                    } else if (prod_type == "GG") {
                    }
                    
                    //$("#payType_tb").val(pymtTypeOptions);
                    $('#payType_tb').find('option').remove().end();
                    $(pymtTypeOptions).appendTo('#payType_tb');
                    
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
            
        };

        

        function muatInsurance(){
            var prod_type = $("#prodType_tb").val();
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariInsuPlacement')!!}',
                data:{'prod_type':prod_type},
                dataType:'json',
                success:function(data){                 
                   
                    var ow = "";
                    ow+='<option value="0" selected disabled>-Select-</option>';
                    for(var i=0;i<data.length;i++) 
                    {
                        if (data.inctype_cd == "3") {
                            ow += "<option value='" + data[i].inctype_cd + "' selected>" + data[i].inctype_nm + "</option>";
                        } else {
                            ow += "<option value='" + data[i].inctype_cd + "''>" + data[i].inctype_nm + "</option>";
                        }
                    };
                    $("#insuPlace_tb").html(ow);
                    console.log(ow);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
            
        };

        function cariModel(){
            var brand_id                = $("#brand_tb").val();
            var ow                      = " ";
            var prod_type               = $("#prodType_tb").val();
            // if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
            //     $("#tjhRateNCIBS").hide();
            //     $("#tjhRate3NCIBS").hide();
            //     $("#tjhRate2NCIBS").hide();
            //     $("#tjhRate2").show();
            //     $("#tjhRate").show();
            //     $("#tjhRate3").show();
            // }else if(prod_type == 'NCIBS' && brand_id == "FUSO" || brand_id == "Toyota" || brand_id == "Daihatsu" || brand_id == "UD Trucks" || brand_id == "Hino"){
            //     $("#tjhRateNCIBS").show();
            //     $("#tjhRate3NCIBS").show();
            //     $("#tjhRate2NCIBS").show();
            //     $("#tjhRate2").hide();
            //     $("#tjhRate").hide();
            //     $("#tjhRate3").hide();
            // };

            $.ajax({
                type:'get',
                url:'{!!URL::to('findModel')!!}',
                data:{'brand_id':brand_id},
                success:function(data){
                    
                    console.log(data);
                    
                    ow+='<option value="0" selected disabled>Chose Model</option>';
                    for(var i=0;i<data.length;i++)
                    {
                        ow+='<option value="'+data[i].model_no+'">'+data[i].model_nm+'</option>';
                    }

                    $('#model_tb').find('option').remove().end();
                    $(ow).appendTo('#model_tb');
                    
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
            
        };

        function cariVhcType(){
            var brand_id=$("#brand_tb").val();
            var model_no=$("#model_tb").val();
            var vhc_type=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('cariVhcType')!!}',
                data:{'brand_id':brand_id, 'model_no':model_no},
                success:function(data){
                    vhc_type = data.vhc_type;
                    console.log(data.vhc_type);
                    $("#vhcType_tb").val(vhc_type);
                    var cariVhcType        = $("#vhcType_tb").val();
                    console.log("cariVhcType",cariVhcType);
                    if(cariVhcType == 'PSG'){
                        $("#tjhRateNCIBS_div").hide();
                        $("#tjhRate3NCIBS_div").hide();
                        $("#tjhRate2NCIBS_div").hide();
                        $("#tjhRate2_div").show();
                        $("#tjhRate_div").show();
                        $("#tjhRate3_div").show();
                    }else if(cariVhcType == 'CMC'){
                        $("#tjhRateNCIBS_div").show();
                        $("#tjhRate3NCIBS_div").show();
                        $("#tjhRate2NCIBS_div").show();
                        $("#tjhRate2_div").hide();
                        $("#tjhRate_div").hide();
                        $("#tjhRate3_div").hide();
                    };
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };

        function cariCategoryNo(){
            var brand_id=$("#brand_tb").val();
            var model_no=$("#model_tb").val();
            var category_no=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('cariVhcType')!!}',
                data:{'brand_id':brand_id, 'model_no':model_no},
                success:function(data){
                    category_no = data.category_no;
                    console.log(category_no);
                    $("#category_no_tb").val(category_no);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };

        function cariOtr(){ 
            
            var model_no=$("#model_tb").val();
            var dp=$("#dp_tb").val();

            $.ajax({
                type:'get',
                url:'{!!URL::to('cariOtr')!!}',
                data:{'model_no':model_no},
                dataType:'json',
                success:function(data){

                    console.log(data.otr);
                    console.log(data.model_year);

                    $("#otr_tb").val(numberWithCommas(data.otr));
                    $("#year_tb").val(data.model_year);
                   
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };

        function cariRateByDp(){
            var prod_type = $("#prodType_tb").val();
            var dptype_cd = $("#dp_tb").val();
            var rateBD = " ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateByDp')!!}',
                data:{'prod_type':prod_type, 'dptype_cd':dptype_cd},
                dataType:'json',
                success:function(data){
                    rateBD = data.addirate;
                    console.log(rateBD);
                    $("#rateBD_tb").val(Number(rateBD));
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };

        function hitungDPdanLoanAmt(){
            var Otr             = Number($("#otr_tb").val().replace(/,/gi, ""));
            var ambilDiscount   = Number($("#discount_tb").val().replace(/,/gi, ""));
            var ambilOtr        = Otr-ambilDiscount;
            var ambilDp         = Number($("#dp_tb").val());
            
            var hasilDp         = ambilOtr*(ambilDp/100);
            var ambilLnAmt      = ambilOtr - hasilDp;
            $("#hasildp_tb").val(numberWithCommas(hasilDp));
            $("#lnAmt_tb").val(numberWithCommas(ambilLnAmt));
        };
    /*
        function updateOtr(){
            var ambilOtr        = Number($("#otr_tb").val().replace(/,/gi, ""));
            var ambilDiscount   = Number($("#discount_tb").val().replace(/,/gi, ""));
            
            var updateOtr = ambilOtr-ambilDiscount;
            console.log("Update Otr",updateOtr);
            $("#otr2_tb").val(numberWithCommas(updateOtr));
        };
    */
        function updateLoanAmt(){
            var Otr             = Number($("#otr_tb").val().replace(/,/gi, ""));
            var ambilDiscount   = Number($("#discount_tb").val().replace(/,/gi, ""));
            var ambilOtr        = Otr-ambilDiscount;
            console.log("OTR",ambilOtr);
            var hasilDp         = Number($("#hasildp_tb").val().replace(/,/gi, ""));
            var totInsu         = Number($("#totInsu_tb").val().replace(/,/gi, ""));
            var insuPlace       = $("#insuPlace_tb").val().replace(/,/gi, "");
            console.log("Insu Place",insuPlace);
            if(insuPlace == 3){
                var ambilLnAmt = ambilOtr - hasilDp;
            }else if(insuPlace == 2){
                var ambilLnAmt = ambilOtr - hasilDp + totInsu;
            };
            $("#lnAmt_tb").val(numberWithCommas(ambilLnAmt));
        };

        // function cariTenor(){
            
        //     var prod_type = $("#prodType_tb").val();
        //     var pymtType = $("#payType_tb").val();
        //     console.log(pymtType);
        //     var ow = "";

        //     $.ajax({
        //         type:'get',
        //         url:'{!!URL::to('cariTenure')!!}',
        //         data:{'prod_type':prod_type},
        //         dataType:'json',
        //         success:function(data){
        //             console.log(data);
        //             ow+='<option value="0" selected disabled>-Select-</option>';
        //             if (data.prod_type == "GG") {			
        //                 ow += "<option value='36'>36</option>";
        //                 ow += "<option value='48'>48</option>";
        //             } else if (data.prod_type == "OCRF" || data.prod_type == "OCRH"){
        //                 if (pymtType == "ADDM") {
        //                     ow += "<option value='11'>11</option>";
        //                     ow += "<option value='23'>23</option>";
        //                     ow += "<option value='35'>35</option>";
        //                 } else if (pymtType == "ADDB") {
        //                     ow += "<option value='12'>12</option>";
        //                     ow += "<option value='24'>24</option>";
        //                     ow += "<option value='36'>36</option>";
        //                 }
        //             } else {						
        //                 if (pymtType == "Grace Period") {
        //                     ow += "<option value='10'>10</option>";
        //                     ow += "<option value='22'>22</option>";
        //                     ow += "<option value='34'>34</option>";
        //                     ow += "<option value='46'>46</option>";
        //                     ow += "<option value='58'>58</option>";
        //                 } else if (pymtType == "ADDM") {
        //                     ow += "<option value='11'>11</option>";
        //                     ow += "<option value='23'>23</option>";
        //                     ow += "<option value='35'>35</option>";
        //                     ow += "<option value='47'>47</option>";
        //                     ow += "<option value='59'>59</option>";
        //                 } else if (pymtType == "ADDB") {
        //                     ow += "<option value='12'>12</option>";
        //                     ow += "<option value='24'>24</option>";
        //                     ow += "<option value='36'>36</option>";
        //                     ow += "<option value='48'>48</option>";
        //                     ow += "<option value='60'>60</option>";
        //                 }
        //             }
        //             $('#tenure_tb').find('option').remove().end();
        //             $(ow).appendTo('#tenure_tb');
        //         },
        //         error:function(){
        //             alert('Ada kesalahan. Mohon Bersabar ini ujian.');
        //         }   
        //     })
        // };

        function cariTenor(){
            
            var prod_type = $("#prodType_tb").val();
            var pymtType = $("#payType_tb").val();
            console.log(pymtType);
            var ow = "";
            ow+='<option value="0" selected disabled>-Select-</option>';
            if (prod_type == "GG") {			
                ow += "<option value='36'>36</option>";
                ow += "<option value='48'>48</option>";
            } else if (prod_type == "OCRF" || prod_type == "OCRH"){
                if (pymtType == "ADDM") {
                    ow += "<option value='11'>11</option>";
                    ow += "<option value='23'>23</option>";
                    ow += "<option value='35'>35</option>";
                } else if (pymtType == "ADDB") {
                    ow += "<option value='12'>12</option>";
                    ow += "<option value='24'>24</option>";
                    ow += "<option value='36'>36</option>";
                }
            } else {						
                if (pymtType == "Grace Period") {
                    ow += "<option value='10'>10</option>";
                    ow += "<option value='22'>22</option>";
                    ow += "<option value='34'>34</option>";
                    ow += "<option value='46'>46</option>";
                    ow += "<option value='58'>58</option>";
                } else if (pymtType == "ADDM") {
                    ow += "<option value='11'>11</option>";
                    ow += "<option value='23'>23</option>";
                    ow += "<option value='35'>35</option>";
                    ow += "<option value='47'>47</option>";
                    ow += "<option value='59'>59</option>";
                } else if (pymtType == "ADDB") {
                    ow += "<option value='12'>12</option>";
                    ow += "<option value='24'>24</option>";
                    ow += "<option value='36'>36</option>";
                    ow += "<option value='48'>48</option>";
                    ow += "<option value='60'>60</option>";
                }
            }
            $('#tenure_tb').find('option').remove().end();
            $(ow).appendTo('#tenure_tb');
        };

        function cariRateByTenure(){
            var prod_type = $("#prodType_tb").val();
            var tenor = $("#tenure_tb").val().replace(/,/gi, "");
            var rateByTn = " ";
            var year = " ";
            if(tenor == '12' || tenor == '11' ){
                year = '1';
            }else if (tenor == '23' || tenor == '24' ){
                year = '2';
            }else if(tenor == '35' || tenor == '36'){
                year = '3';
            }else if(tenor == '47' || tenor == '48'){
                year = '4';
            }else if(tenor == '59' || tenor == '60'){
                year = '5';
            };
                    console.log(year);
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariTenure')!!}',
                data:{'year':year, 'prod_type':prod_type},
                dataType:'json',
                success:function(data){
                    
                    rateByTn = data.rate;
                    console.log(rateByTn);
                    $("#rateBT_tb").val(Number(rateByTn));
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };

        function finalRateByTenure() {
            var base_rate   = Number($("#base_rate_tb").val().replace(/,/gi, ""));
            var rateBT      = Number($("#rateBT_tb").val().replace(/,/gi, ""));
            var finalRBT    = 0;

            finalRBT        = base_rate + rateBT;
            console.log("Base Rate",base_rate);
            console.log("Rate By Tenure",rateBT);
            console.log("Final Rate By Tenure",finalRBT.toFixed(2));
            $("#finalRBT_tb").val(Number(finalRBT.toFixed(2)));
        }

        function cariRateInsuTjh1dis1(){
            // var disaster_type_no = Number($("#disaster1_tb").val().replace(/,/gi, ""));
            var disaster_type_no = Number($("#disaster1_tb").val());
            console.log(disaster_type_no);
            var insu_tb = $("#insu_tb").val();
            var insuTypeTahun1 = " ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuTjh')!!}',
                data:{'disaster_type_no':disaster_type_no, 'ins_type':insu_tb},
                success:function(data){
                    insuTypeTahun1 = data.fstyear;
                    console.log("Rate Disaster 1 Th 1",insuTypeTahun1);
                    $("#addInsu1th1_tb").val(insuTypeTahun1);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };
        function cariRateInsuTjh2dis1(){
            // var disaster_type_no = Number($("#disaster1_tb").val().replace(/,/gi, ""));
            var disaster_type_no = Number($("#disaster1_tb").val());
            console.log(disaster_type_no);
            var insu_tb=$("#insu_tb").val();
            var insuTypeTahun2 = " ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuTjh')!!}',
                data:{'disaster_type_no':disaster_type_no, 'ins_type':insu_tb},
                success:function(data){
                    insuTypeTahun2 = data.sndyear;
                    console.log("Rate Disaster 1 Th 2",insuTypeTahun2);
                    $("#addInsu1th2_tb").val(insuTypeTahun2);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };

        function cariRateInsuTjh1dis2(){
            // var disaster_type_no = Number($("#disaster2_tb").val().replace(/,/gi, ""));
            var disaster_type_no = Number($("#disaster2_tb").val());
            console.log(disaster_type_no);
            var insu_tb=$("#insu_tb").val();
            var insuTypeTahun1 = " ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuTjh')!!}',
                data:{'disaster_type_no':disaster_type_no, 'ins_type':insu_tb},
                success:function(data){
                    insuTypeTahun1 = data.fstyear;
                    console.log("Rate Disaster 2 Th 1",insuTypeTahun1);
                    $("#addInsu2th1_tb").val(insuTypeTahun1);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };
        function cariRateInsuTjh2dis2(){
            // var disaster_type_no = Number($("#disaster2_tb").val().replace(/,/gi, ""));
            var disaster_type_no = Number($("#disaster2_tb").val());
            console.log(disaster_type_no);
            var insu_tb=$("#insu_tb").val();
            var insuTypeTahun2 = " ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuTjh')!!}',
                data:{'disaster_type_no':disaster_type_no, 'ins_type':insu_tb},
                success:function(data){
                    insuTypeTahun2 = data.sndyear;
                    console.log("Rate Disaster 2 Th 2",insuTypeTahun2);
                    $("#addInsu2th2_tb").val(insuTypeTahun2);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };

        function cariRateInsuTjh1dis3(){
            // var disaster_type_no = Number($("#disaster3_tb").val().replace(/,/gi, ""));
            var disaster_type_no = Number($("#disaster3_tb").val());
            console.log(disaster_type_no);
            var insu_tb=$("#insu_tb").val();
            var insuTypeTahun1 = " ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuTjh')!!}',
                data:{'disaster_type_no':disaster_type_no, 'ins_type':insu_tb},
                success:function(data){
                    insuTypeTahun1 = data.fstyear;
                    console.log("Rate Disaster 3 Th 1",insuTypeTahun1);
                    $("#addInsu3th1_tb").val(insuTypeTahun1);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };
        function cariRateInsuTjh2dis3(){
            // var disaster_type_no = Number($("#disaster3_tb").val().replace(/,/gi, ""));
            var disaster_type_no = Number($("#disaster3_tb").val());
            console.log(disaster_type_no);
            var insu_tb=$("#insu_tb").val();
            var insuTypeTahun2 = " ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuTjh')!!}',
                data:{'disaster_type_no':disaster_type_no, 'ins_type':insu_tb},
                success:function(data){
                    insuTypeTahun2 = data.sndyear;
                    console.log("Rate Disaster 3 Th 2",insuTypeTahun2);
                    $("#addInsu3th2_tb").val(insuTypeTahun2);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };

        function cariRateInsuTjh1dis4(){
            // var disaster_type_no = Number($("#disaster4_tb").val().replace(/,/gi, ""));
            var disaster_type_no = Number($("#disaster4_tb").val());
            console.log(disaster_type_no);
            var insu_tb=$("#insu_tb").val();
            var insuTypeTahun1 = " ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuTjh')!!}',
                data:{'disaster_type_no':disaster_type_no, 'ins_type':insu_tb},
                success:function(data){
                    insuTypeTahun1 = data.fstyear;
                    console.log("Rate Disaster 4 Th 1",insuTypeTahun1);
                    $("#addInsu4th1_tb").val(insuTypeTahun1);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };
        function cariRateInsuTjh2dis4(){
            // var disaster_type_no = Number($("#disaster4_tb").val().replace(/,/gi, ""));
            var disaster_type_no = Number($("#disaster4_tb").val());
            console.log(disaster_type_no);
            var insu_tb=$("#insu_tb").val();
            var insuTypeTahun2 = " ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuTjh')!!}',
                data:{'disaster_type_no':disaster_type_no, 'ins_type':insu_tb},
                success:function(data){
                    insuTypeTahun2 = data.sndyear;
                    console.log("Rate Disaster 4 Th 2",insuTypeTahun2);
                    $("#addInsu4th2_tb").val(insuTypeTahun2);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };

        function cariRateInsuTjh1dis5(){
            // var disaster_type_no = Number($("#disaster5_tb").val().replace(/,/gi, ""));
            var disaster_type_no = Number($("#disaster5_tb").val());
            console.log(disaster_type_no);
            var insu_tb=$("#insu_tb").val();
            var insuTypeTahun1 = " ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuTjh')!!}',
                data:{'disaster_type_no':disaster_type_no, 'ins_type':insu_tb},
                success:function(data){
                    insuTypeTahun1 = data.fstyear;
                    console.log("Rate Disaster 5 Th 1",insuTypeTahun1);
                    $("#addInsu5th1_tb").val(insuTypeTahun1);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };
        function cariRateInsuTjh2dis5(){
            // var disaster_type_no = Number($("#disaster5_tb").val().replace(/,/gi, ""));
            var disaster_type_no = Number($("#disaster5_tb").val());
            console.log(disaster_type_no);
            var insu_tb=$("#insu_tb").val();
            var insuTypeTahun2 = " ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuTjh')!!}',
                data:{'disaster_type_no':disaster_type_no, 'ins_type':insu_tb},
                success:function(data){
                    insuTypeTahun2 = data.sndyear;
                    console.log("Rate Disaster 5 Th 2",insuTypeTahun2);
                    $("#addInsu5th2_tb").val(insuTypeTahun2);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };

        function cariInsurancePrice1() {
            var prod_type       = $("#prodType_tb").val();
            var ins_type        = $("#insu_tb").val();
            var ambilOtr        = Number($("#otr_tb").val().replace(/,/gi, ""));
            var ambilDiscount   = Number($("#discount_tb").val().replace(/,/gi, ""));
            var from_val        = ambilOtr-ambilDiscount;
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                var vhc_type  = $("#vhcType_tb").val();
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                var vhc_type  = $("#vehicleType").val();
            }else{
                var vhc_type  = $("#vhcType_tb").val();
            };


            if(vhc_type == 'PSG' && from_val >= 0 && from_val <= 125000000){
                var InsuPrice = 1;
            }else if (vhc_type == 'PSG' && from_val >= 125000001 && from_val <= 200000000){
                var InsuPrice = 2;
            }else if (vhc_type == 'PSG' && from_val >= 200000001 && from_val <= 400000000){
                var InsuPrice = 3;
            }else if (vhc_type == 'PSG' && from_val >= 400000001 && from_val <= 800000000){
                var InsuPrice = 4;
            }else if (vhc_type == 'PSG' && from_val >= 800000001 && from_val <= 2147483647){
                var InsuPrice = 5;
            }else if(vhc_type == 'CMC' && ins_type == 'CP'){
                var InsuPrice = 1;
            }else if(vhc_type == 'CMC' && ins_type == 'TLO'){
                var InsuPrice = 2;
            }else if(vhc_type == 'CMC' && ins_type == 'CB'){
                var InsuPrice = 3;
            }

            console.log("Insurance Price",InsuPrice);
            $("#insuPrice_tb").val(InsuPrice);
        };

        function cariInsurancePrice2() {
            var prod_type = $("#prodType_tb").val();
            var ins_type = $("#insu_tb").val();
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                var vhc_type  = $("#vhcType_tb").val();
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                var vhc_type  = $("#vehicleType").val();
            }else{
                var vhc_type  = $("#vhcType_tb").val();
            };
            //var vhc_type = $("#vhcType_tb").val();
            var ambilOtr        = Number($("#otr_tb").val().replace(/,/gi, ""));
            var ambilDiscount   = Number($("#discount_tb").val().replace(/,/gi, ""));
            var from_val        = (ambilOtr-ambilDiscount)*0.9;
            if(vhc_type == 'PSG' && from_val >= 0 && from_val <= 125000000){
                var InsuPrice = 1;
            }else if (vhc_type == 'PSG' && from_val >= 125000001 && from_val <= 200000000){
                var InsuPrice = 2;
            }else if (vhc_type == 'PSG' && from_val >= 200000001 && from_val <= 400000000){
                var InsuPrice = 3;
            }else if (vhc_type == 'PSG' && from_val >= 400000001 && from_val <= 800000000){
                var InsuPrice = 4;
            }else if (vhc_type == 'PSG' && from_val >= 800000001 && from_val <= 2147483647){
                var InsuPrice = 5;
            }else if(vhc_type == 'CMC' && ins_type == 'CP'){
                var InsuPrice = 1;
            }else if(vhc_type == 'CMC' && ins_type == 'TLO'){
                var InsuPrice = 2;
            }else if(vhc_type == 'CMC' && ins_type == 'CB'){
                var InsuPrice = 3;
            }

            console.log("Insurance Price",InsuPrice);
            $("#insuPrice2_tb").val(InsuPrice);
        };

        function cariInsurancePrice3() {
            var prod_type = $("#prodType_tb").val();
            var ins_type = $("#insu_tb").val();
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                var vhc_type  = $("#vhcType_tb").val();
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                var vhc_type  = $("#vehicleType").val();
            }else{
                var vhc_type  = $("#vhcType_tb").val();
            };
            var ambilOtr        = Number($("#otr_tb").val().replace(/,/gi, ""));
            var ambilDiscount   = Number($("#discount_tb").val().replace(/,/gi, ""));
            var from_val        = (ambilOtr-ambilDiscount)*0.8;

            if(vhc_type == 'PSG' && from_val >= 0 && from_val <= 125000000){
                var InsuPrice = 1;
            }else if (vhc_type == 'PSG' && from_val >= 125000001 && from_val <= 200000000){
                var InsuPrice = 2;
            }else if (vhc_type == 'PSG' && from_val >= 200000001 && from_val <= 400000000){
                var InsuPrice = 3;
            }else if (vhc_type == 'PSG' && from_val >= 400000001 && from_val <= 800000000){
                var InsuPrice = 4;
            }else if (vhc_type == 'PSG' && from_val >= 800000001 && from_val <= 2147483647){
                var InsuPrice = 5;
            }else if(vhc_type == 'CMC' && ins_type == 'CP'){
                var InsuPrice = 1;
            }else if(vhc_type == 'CMC' && ins_type == 'TLO'){
                var InsuPrice = 2;
            }else if(vhc_type == 'CMC' && ins_type == 'CB'){
                var InsuPrice = 3;
            }                
            console.log("Insurance Price",InsuPrice);
            $("#insuPrice3_tb").val(InsuPrice);
        };
        function cariInsurancePrice4() {
            var prod_type = $("#prodType_tb").val();
            var ins_type = $("#insu_tb").val();
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                var vhc_type  = $("#vhcType_tb").val();
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                var vhc_type  = $("#vehicleType").val();
            }else{
                var vhc_type  = $("#vhcType_tb").val();
            };
            var ambilOtr        = Number($("#otr_tb").val().replace(/,/gi, ""));
            var ambilDiscount   = Number($("#discount_tb").val().replace(/,/gi, ""));
            var from_val        = (ambilOtr-ambilDiscount)*0.7;


            if(vhc_type == 'PSG' && from_val >= 0 && from_val <= 125000000){
                var InsuPrice = 1;
            }else if (vhc_type == 'PSG' && from_val >= 125000001 && from_val <= 200000000){
                var InsuPrice = 2;
            }else if (vhc_type == 'PSG' && from_val >= 200000001 && from_val <= 400000000){
                var InsuPrice = 3;
            }else if (vhc_type == 'PSG' && from_val >= 400000001 && from_val <= 800000000){
                var InsuPrice = 4;
            }else if (vhc_type == 'PSG' && from_val >= 800000001 && from_val <= 2147483647){
                var InsuPrice = 5;
            }else if(vhc_type == 'CMC' && ins_type == 'CP'){
                var InsuPrice = 1;
            }else if(vhc_type == 'CMC' && ins_type == 'TLO'){
                var InsuPrice = 2;
            }else if(vhc_type == 'CMC' && ins_type == 'CB'){
                var InsuPrice = 3;
            }
            console.log("Insurance Price",InsuPrice);
            $("#insuPrice4_tb").val(InsuPrice);
        };


        function cariRateInsuPremium1(){
            var prod_type = $("#prodType_tb").val();
            var ins_type = $("#insu_tb").val();
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                var vhc_type  = $("#vhcType_tb").val();
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                var vhc_type  = $("#vehicleType").val();
            }else{
                var vhc_type  = $("#vhcType_tb").val();
            };
            var ins_no   = Number($("#insuPrice_tb").val().replace(/,/gi, ""));
            
            var rateInsuPremiumTahun1 = " ";
            console.log("Rate Insurance Premium 1");
            console.log("Insurance Type 1",ins_type);
            console.log("Vehicle Type insu premium 1",vhc_type);
            console.log("ins_no insu premium",ins_no);
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuPremium')!!}',
                data:{'ins_type':ins_type, 'vhc_type':vhc_type, 'ins_no':ins_no},
                success:function(data){
                    
                    rateInsuPremiumTahun1 = data.fstyear;
                    console.log("Rate Insurance Premium 1",rateInsuPremiumTahun1);
                    $("#rateInsuPremium1_tb").val(rateInsuPremiumTahun1);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };
        function cariRateInsuPremium2(){
            var prod_type = $("#prodType_tb").val();
            var ins_type = $("#insu_tb").val();
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                var vhc_type  = $("#vhcType_tb").val();
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                var vhc_type  = $("#vehicleType").val();
            }else{
                var vhc_type  = $("#vhcType_tb").val();
            };
            var ins_no   = Number($("#insuPrice2_tb").val().replace(/,/gi, ""));
            
            var rateInsuPremiumTahun2 = " ";
            console.log("Rate Insurance Premium 2");
            console.log("Insurance Type insu premium 2",ins_type);
            console.log("Vehicle Type insu premium 2",vhc_type);
            console.log("ins_no insu premium 2",ins_no);
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuPremium')!!}',
                data:{'ins_type':ins_type, 'vhc_type':vhc_type, 'ins_no':ins_no},
                success:function(data){
                    
                    rateInsuPremiumTahun2 = data.sndyear;
                    console.log("Rate Insurance Premium 2",rateInsuPremiumTahun2);
                    $("#rateInsuPremium2_tb").val(rateInsuPremiumTahun2);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };
        function cariRateInsuPremium3(){
            var prod_type = $("#prodType_tb").val();
            var ins_type = $("#insu_tb").val();
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                var vhc_type  = $("#vhcType_tb").val();
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                var vhc_type  = $("#vehicleType").val();
            }else{
                var vhc_type  = $("#vhcType_tb").val();
            };
            var ins_no   = Number($("#insuPrice3_tb").val().replace(/,/gi, ""));
            
            var rateInsuPremiumTahun3 = " ";
            console.log("Rate Insurance Premium 3");
            console.log("Insurance Type 3",ins_type);
            console.log("Vehicle Type insu premium 3",vhc_type);
            console.log("ins_no insu premium 3",ins_no);
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuPremium')!!}',
                data:{'ins_type':ins_type, 'vhc_type':vhc_type, 'ins_no':ins_no},
                success:function(data){
                    
                    rateInsuPremiumTahun3 = data.sndyear;
                    console.log("Rate Insurance Premium 3",rateInsuPremiumTahun3);
                    $("#rateInsuPremium3_tb").val(rateInsuPremiumTahun3);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };
        function cariRateInsuPremium4(){
            var prod_type = $("#prodType_tb").val();
            var ins_type = $("#insu_tb").val();
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                var vhc_type  = $("#vhcType_tb").val();
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                var vhc_type  = $("#vehicleType").val();
            }else{
                var vhc_type  = $("#vhcType_tb").val();
            };
            var ins_no   = Number($("#insuPrice4_tb").val().replace(/,/gi, ""));
            
            var rateInsuPremiumTahun4 = " ";
            console.log("Rate Insurance Premium 4");
            console.log("Insurance Type insu premium 4",ins_type);
            console.log("Vehicle Type insu premium 4",vhc_type);
            console.log("ins_no insu premium 4",ins_no);
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuPremium')!!}',
                data:{'ins_type':ins_type, 'vhc_type':vhc_type, 'ins_no':ins_no},
                success:function(data){
                    
                    rateInsuPremiumTahun4 = data.sndyear;
                    console.log("Rate Insurance Premium 4",rateInsuPremiumTahun4);
                    $("#rateInsuPremium4_tb").val(rateInsuPremiumTahun4);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };
        function cariRateInsuPremium5(){
            var prod_type = $("#prodType_tb").val();
            var ins_type = $("#insu_tb").val();
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                var vhc_type  = $("#vhcType_tb").val();
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                var vhc_type  = $("#vehicleType").val();
            }else{
                var vhc_type  = $("#vhcType_tb").val();
            };
            var ins_no   = Number($("#insuPrice4_tb").val().replace(/,/gi, ""));
            
            var rateInsuPremiumTahun5 = " ";
            console.log("Rate Insurance Premium 5");
            console.log("Insurance Type insu premium 5",ins_type);
            console.log("Vehicle Type insu premium 5",vhc_type);
            console.log("ins_no insu premium 5",ins_no);
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuPremium')!!}',
                data:{'ins_type':ins_type, 'vhc_type':vhc_type, 'ins_no':ins_no},
                success:function(data){
                    
                    rateInsuPremiumTahun5 = data.sndyear;
                    console.log("Rate Insurance Premium 5",rateInsuPremiumTahun5);
                    $("#rateInsuPremium5_tb").val(rateInsuPremiumTahun5);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };

    /*
        function cariRateInsuPremium1(){
            var ins_type = $("#insu_tb").val();
            var vhc_type = $("#vhcType_tb").val();
            var from_val = Number($("#otr_tb").val().replace(/,/gi, ""));

            if (vhc_type == 'PSG'){
                if (from_val >= 0 && from_val <= 125000000) {
                    from_val = 0;
                } else if (from_val >= 125000001 && from_val <= 200000000) {
                    from_val = 125000001;
                } else if (from_val >= 200000001 && from_val <= 400000000) {
                    from_val = 200000001;
                } else if (from_val >= 400000001 && from_val <= 800000000) {
                    from_val = 400000001;
                } else if (from_val >= 800000001 && from_val <= 2147483647) {
                    from_val = 800000001;
                };
            }else if(vhc_type == 'CMC'){
                from_val = 0;
            }
            
            var rateInsuPremiumTahun1 = " ";
            console.log("Rate Insurance Premium");
            console.log("Insurance Type",ins_type);
            console.log("Vehicle Type",vhc_type);
            console.log("From Val",from_val);
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuPremium')!!}',
                data:{'ins_type':ins_type, 'vhc_type':vhc_type, 'from_val':from_val},
                success:function(data){
                    
                    rateInsuPremiumTahun1 = data.fstyear;
                    console.log("Rate Insurance Premium 1",rateInsuPremiumTahun1);
                    $("#rateInsuPremium1_tb").val(rateInsuPremiumTahun1);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };
        function cariRateInsuPremium2(){
            var ins_type = $("#insu_tb").val();
            var vhc_type = $("#vhcType_tb").val();
            var from_val = Number($("#otr_tb").val().replace(/,/gi, ""));
            if (vhc_type == 'PSG'){
                if (from_val >= 0 && from_val <= 125000000) {
                    from_val = 0;
                } else if (from_val >= 125000001 && from_val <= 200000000) {
                    from_val = 125000001;
                } else if (from_val >= 200000001 && from_val <= 400000000) {
                    from_val = 200000001;
                } else if (from_val >= 400000001 && from_val <= 800000000) {
                    from_val = 400000001;
                } else if (from_val >= 800000001 && from_val <= 2147483647) {
                    from_val = 800000001;
                };
            }else if(vhc_type == 'CMC'){
                from_val = 0;
            }
            var rateInsuPremiumTahun1 = 0;
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuPremium')!!}',
                data:{'ins_type':ins_type, 'vhc_type':vhc_type, 'from_val':from_val},
                success:function(data){
                    
                    rateInsuPremiumTahun2 = data.sndyear;
                    console.log(rateInsuPremiumTahun2);
                    $("#rateInsuPremium2_tb").val(rateInsuPremiumTahun2);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };
        function cariRateInsuPremium3(){
            var ins_type = $("#insu_tb").val();
            var vhc_type = $("#vhcType_tb").val();
            var from_val = Number($("#lnAmt_tb").val().replace(/,/gi, ""));
            if (vhc_type == 'PSG'){
                if (from_val >= 0 && from_val <= 125000000) {
                    from_val = 0;
                } else if (from_val >= 125000001 && from_val <= 200000000) {
                    from_val = 125000001;
                } else if (from_val >= 200000001 && from_val <= 400000000) {
                    from_val = 200000001;
                } else if (from_val >= 400000001 && from_val <= 800000000) {
                    from_val = 400000001;
                } else if (from_val >= 800000001 && from_val <= 2147483647) {
                    from_val = 800000001;
                };
            }else if(vhc_type == 'CMC'){
                from_val = 0;
            }
            var rateInsuPremiumTahun1 = 0;
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateInsuPremium')!!}',
                data:{'ins_type':ins_type, 'vhc_type':vhc_type, 'from_val':from_val},
                success:function(data){
                    
                    rateInsuPremiumTahun2 = data.sndyear;
                    console.log(rateInsuPremiumTahun2);
                    $("#rateInsuPremium3_tb").val(rateInsuPremiumTahun2);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };
    */
        function cariRateByInsu(){
            var prod_type = $("#prodType_tb").val();
            var inctype_cd = Number($("#insuPlace_tb").val().replace(/,/gi, ""));
            var rateByInsu = " ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariRateByInsu')!!}',
                data:{'prod_type':prod_type, 'inctype_cd':inctype_cd},
                success:function(data){
                    
                    rateByInsu = data.addirate;
                    console.log("rateByInsu",rateByInsu);
                    $("#rateBI_tb").val(Number(rateByInsu));
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };

        
        //fungsi hitung tjh
        function hitungTjh1(){
            var ambilTjh                = $("#tjh").val().replace(/,/gi, "");
            
            var prod_type               = $("#prodType_tb").val();            
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                var vehicleType  = $("#vhcType_tb").val();
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                var vehicleType  = $("#vehicleType").val();
            }else{
                var vehicleType  = $("#vhcType_tb").val();
            };
            
            if(vehicleType == 'CMC'){
                var ambilTjhRate = $("#tjhRateNCIBS").val();
            }else if(vehicleType == 'PSG'){
                var ambilTjhRate = $("#tjhRate").val();
            };
            // var brand_id                = $("#brand_tb").val();
            // var prod_type               = $("#prodType_tb").val();
            // if(prod_type == 'NCIBS' && brand_id == "FUSO" || brand_id == "Toyota" || brand_id == "Daihatsu" || brand_id == "UD Trucks" || brand_id == "Hino"){
            //     var ambilTjhRate = $("#tjhRateNCIBS").val();
            // }else{
            //     var ambilTjhRate = $("#tjhRate").val();
            // };

            if (ambilTjh.trim() == "" || ambilTjhRate.trim() == "") {
                $("#tjhVal").val("0")
                return;
            }
            ambilTjh = Number(ambilTjh);
            ambilTjhRate = Number(ambilTjhRate);
            var tenureVal = Math.ceil(Number($("#tenure_tb").val().replace(/,/gi, ""))/12);
            if (isNaN(ambilTjhRate)) {
                alert("Check the Value!");
                $("#tjhRate").focus();
                return;
            }
            //console.log()
            var inputNilai = 0;
            inputNilai = ambilTjh * ambilTjhRate /100 * tenureVal;
            $("#tjhVal").val(numberWithCommas(inputNilai));
        };
        function hitungTjh2(){
            var ambilTjh                = $("#tjh2").val().replace(/,/gi, "");
            
            var prod_type               = $("#prodType_tb").val();            
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                var vehicleType  = $("#vhcType_tb").val();
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                var vehicleType  = $("#vehicleType").val();
            }else{
                var vehicleType  = $("#vhcType_tb").val();
            };

            if(vehicleType == 'CMC'){
                var ambilTjhRate = $("#tjhRate2NCIBS").val();
            }else if(vehicleType == 'PSG'){
                var ambilTjhRate = $("#tjhRate2").val();
            };
            
            // var brand_id                = $("#brand_tb").val();
            // var prod_type               = $("#prodType_tb").val();
            // if(prod_type == 'NCIBS' && brand_id == "FUSO" || brand_id == "Toyota" || brand_id == "Daihatsu" || brand_id == "UD Trucks" || brand_id == "Hino"){
            //     var ambilTjhRate = $("#tjhRate2NCIBS").val();
            // }else{
            //     var ambilTjhRate = $("#tjhRate2").val();
            // };
            
            if (ambilTjh.trim() == "" || ambilTjhRate.trim() == "") {
                $("#tjhVal2").val("0")
                return;
            }
            ambilTjh = Number(ambilTjh);
            ambilTjhRate = Number(ambilTjhRate);
            var tenureVal = Math.ceil(Number($("#tenure_tb").val().replace(/,/gi, ""))/12);
            if (isNaN(ambilTjhRate)) {
                alert("Check the Value!");
                $("#tjhRate2").focus();
                return;
            }
            //console.log()
            var inputNilai = 0;
            inputNilai = ambilTjh * ambilTjhRate /100 * tenureVal;
            $("#tjhVal2").val(numberWithCommas(inputNilai));
        };
        function hitungTjh3(){
            var ambilTjh                = $("#tjh3").val().replace(/,/gi, "");
            
            var prod_type               = $("#prodType_tb").val();            
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                var vehicleType  = $("#vhcType_tb").val();
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                var vehicleType  = $("#vehicleType").val();
            }else{
                var vehicleType  = $("#vhcType_tb").val();
            };

            if(vehicleType == 'CMC'){
                var ambilTjhRate = $("#tjhRate3NCIBS").val();
            }else if(vehicleType == 'PSG'){
                var ambilTjhRate = $("#tjhRate3").val();
            };
            
            // var brand_id                = $("#brand_tb").val();
            // var prod_type               = $("#prodType_tb").val();
            // if(prod_type == 'NCIBS' && brand_id == "FUSO" || brand_id == "Toyota" || brand_id == "Daihatsu" || brand_id == "UD Trucks" || brand_id == "Hino"){
            //     var ambilTjhRate = $("#tjhRate3NCIBS").val();
            // }else{
            //     var ambilTjhRate = $("#tjhRate3").val();
            // };
            if (ambilTjh.trim() == "" || ambilTjhRate.trim() == "") {
                $("#tjhVal3").val("0")
                return;
            }
            ambilTjh = Number(ambilTjh);
            ambilTjhRate = Number(ambilTjhRate);
            var tenureVal = Math.ceil(Number($("#tenure_tb").val().replace(/,/gi, ""))/12);
            if (isNaN(ambilTjhRate)) {
                alert("Check the Value!");
                $("#tjhRate3").focus();
                return;
            }
            //console.log()
            var inputNilai = 0;
            inputNilai = ambilTjh * ambilTjhRate /100 * tenureVal;
            $("#tjhVal3").val(numberWithCommas(inputNilai));
        };



        function hitungClip(){
            var ambilClip = $("#clip").val();
            var hasilClip = "0";
            if(ambilClip != "0") {
                var Otr        = Number($("#otr_tb").val().replace(/,/gi, ""));
                var ambilDiscount   = Number($("#discount_tb").val().replace(/,/gi, ""));
                var ambilOtr        = Otr-ambilDiscount;
                var ambilHasilDp = Number($("#hasildp_tb").val().replace(/,/gi, ""));
                
                var tenureVal = Math.ceil(Number($("#tenure_tb").val())/12);
                var rateVal = Number($("#clipRate").val())/100;
                //console.log(id);
                hasilClip = (ambilOtr-ambilHasilDp)*rateVal*tenureVal;
            }
            $("#clipVal").val(numberWithCommas(hasilClip));
        };

        function hitungPassenger(){
            var ambilPassenger = $("#passenger").val().replace(/,/gi, "");
            var ambilPsgRate = $("#passengerRate").val();
            if (ambilPassenger.trim() == "" || ambilPsgRate.trim() == "") {
                $("#passengerVal").val("0")
                return;
            }
            ambilPassenger = Number(ambilPassenger);
            ambilPsgRate = Number(ambilPsgRate);
            var tenureVal = Math.ceil(Number($("#tenure_tb").val().replace(/,/gi, ""))/12);
            if (isNaN(ambilPsgRate)) {
                alert("Check the Value!");
                $("#passengerRate").focus();
                return;
            }
            var inputNilai = 0;
            inputNilai = ambilPassenger * ambilPsgRate /100 * tenureVal;
            $("#passengerVal").val(numberWithCommas(inputNilai));
        };

        function hitungPap(){
            var ambilPap = $("#pap").val();
            var hasilPap = "0";
            if(ambilPap != "0") {
                var Otr        = Number($("#otr_tb").val().replace(/,/gi, ""));
                var ambilDiscount   = Number($("#discount_tb").val().replace(/,/gi, ""));
                var ambilOtr        = Otr-ambilDiscount;

                var ambilHasilDp = Number($("#hasildp_tb").val().replace(/,/gi, ""));
                ambilOtr = 10000000;
                var tenureVal = Math.ceil(Number($("#tenure_tb").val().replace(/,/gi, ""))/12);
                var rateVal = Number($("#papRate").val())/100;
                //console.log(id);
                hasilPap = ambilOtr*rateVal*tenureVal;
            }
            $("#papVal").val(numberWithCommas(hasilPap));
        };

        function hitungPad(){
            var ambilPad = $("#pad").val();
            var hasilPad = "0";
            if(ambilPad != "0") {
                var Otr        = Number($("#otr_tb").val().replace(/,/gi, ""));
                var ambilDiscount   = Number($("#discount_tb").val().replace(/,/gi, ""));
                var ambilOtr        = Otr-ambilDiscount;

                var ambilHasilDp = Number($("#hasildp_tb").val().replace(/,/gi, ""));
                ambilOtr = 10000000;
                var tenureVal = Math.ceil(Number($("#tenure_tb").val().replace(/,/gi, ""))/12);
                var rateVal = Number($("#padRate").val())/100;
                //console.log(id);
                hasilPad = ambilOtr*rateVal*tenureVal;				
                
            }
            $("#padVal").val(numberWithCommas(hasilPad));
        };

        function cariBaseRate(){
            var prod_type   = $("#prodType_tb").val();
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                var category_no = $("#category_no_tb").val();
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                var category_no = $("#year2_tb").val();
            }else{
                var category_no = $("#category_no_tb").val();
            };
            //var category_no = $("#category_no_tb").val();
            var base_rate   = " ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('cariBaseRate2')!!}',
                data:{'prod_type':prod_type, 'category_no':category_no},
                dataType:'json',
                success:function(data){
                    base_rate = data.base_rate;
                    console.log(base_rate);
                    $("#base_rate_tb").val(base_rate);
                    
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
            
        };

        function hitungFOR(){
            var rateBD                = Number($("#rateBD_tb").val().replace(/,/gi, ""));
            var rateBT                = Number($("#finalRBT_tb").val().replace(/,/gi, ""));
            var rateBI                = Number($("#rateBI_tb").val().replace(/,/gi, ""));
            var hasilFOR = 0;
            hasilFOR = rateBD + rateBT + rateBI;
            //return(hasilFOR);
            console.log("Rate By Dp",rateBD);
            console.log("Rate By Tenure",rateBT);
            console.log("Rate By Insurance",rateBI);
            console.log("Hasil FOR",hasilFOR.toFixed(2));
            $("#hasilFOR_tb").val(hasilFOR.toFixed(2));
            //Math.ceil10(rate*12,-4)
        };

        function hitungTotInsu(){  
            //hitung ins. premium     
            console.log("Hitung Insurance");
            var prod_type   = $("#prodType_tb").val();
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                var Otr        = Number($("#otr_tb").val().replace(/,/gi, ""));
                var ambilDiscount   = Number($("#discount_tb").val().replace(/,/gi, ""));
                var ambilOtr        = Otr-ambilDiscount;
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH'){
                var ambilOtr     = Number($("#otr_tb").val().replace(/,/gi, ""));
            }else{
                var ambilOtr     = Number($("#otr_tb").val().replace(/,/gi, ""));
            };
            console.log("OTR Insurance",ambilOtr);

            var ambilTenor   = Number($("#tenure_tb").val().replace(/,/gi, ""));       
            var persenTahun1 = Number($("#rateInsuPremium1_tb").val().replace(/,/gi, ""));
            var persenTahun2 = Number($("#rateInsuPremium2_tb").val().replace(/,/gi, ""));
            var persenTahun3 = Number($("#rateInsuPremium3_tb").val().replace(/,/gi, ""));
            var persenTahun4 = Number($("#rateInsuPremium4_tb").val().replace(/,/gi, ""));
            var persenTahun5 = Number($("#rateInsuPremium5_tb").val().replace(/,/gi, ""));

            var insuPremium = 0;
            if(ambilTenor == '12' || ambilTenor == '11' ){
                insuPremium = ambilOtr*(persenTahun1/100);
            }else if (ambilTenor == '23' || ambilTenor == '24' ){
                insuPremium = ((ambilOtr*(persenTahun1/100))+(((ambilOtr*0.9)*(persenTahun2/100))));
            }else if(ambilTenor == '35' || ambilTenor == '36'){
                insuPremium = ((ambilOtr*(persenTahun1/100))+((ambilOtr*0.9)*(persenTahun2/100))+((ambilOtr*0.8)*(persenTahun3/100)));
            }else if(ambilTenor == '47' || ambilTenor == '48'){
                insuPremium = ((ambilOtr*(persenTahun1/100))+((ambilOtr*0.9)*(persenTahun2/100))+((ambilOtr*0.8)*(persenTahun3/100))+((ambilOtr*0.7)*(persenTahun4/100)));
            }else if(ambilTenor == '59' || ambilTenor == '60'){
                insuPremium = ((ambilOtr*(persenTahun1/100))+((ambilOtr*0.9)*(persenTahun2/100))+((ambilOtr*0.8)*(persenTahun3/100))+((ambilOtr*0.7)*(persenTahun4/100))+((ambilOtr*0.7)*(persenTahun5/100)));
            };
            console.log("Total Insurance Premium",insuPremium);

                //hitung tjh      
                var tjhAmt1 = Number($("#tjhVal").val().replace(/,/gi, ""));
                var tjhAmt2 = Number($("#tjhVal2").val().replace(/,/gi, ""));
                var tjhAmt3 = Number($("#tjhVal3").val().replace(/,/gi, ""));
                var totTjhAmt = tjhAmt1 + tjhAmt2 + tjhAmt3;
                            
                        

                var addInsu1Tahun1      = Number($("#addInsu1th1_tb").val().replace(/,/gi, ""));
                var addInsu1Tahun2      = Number($("#addInsu1th2_tb").val().replace(/,/gi, ""));
                var addInsu2Tahun1      = Number($("#addInsu2th1_tb").val().replace(/,/gi, ""));
                var addInsu2Tahun2      = Number($("#addInsu2th2_tb").val().replace(/,/gi, ""));
                var addInsu3Tahun1      = Number($("#addInsu3th1_tb").val().replace(/,/gi, ""));
                var addInsu3Tahun2      = Number($("#addInsu3th2_tb").val().replace(/,/gi, ""));
                var addInsu4Tahun1      = Number($("#addInsu4th1_tb").val().replace(/,/gi, ""));
                var addInsu4Tahun2      = Number($("#addInsu4th2_tb").val().replace(/,/gi, ""));
                var addInsu5Tahun1      = Number($("#addInsu5th1_tb").val().replace(/,/gi, ""));
                var addInsu5Tahun2      = Number($("#addInsu5th2_tb").val().replace(/,/gi, ""));

                var ambilPassangerVal   = Number($("#passengerVal").val().replace(/,/gi, ""));
                var ambilClipVal        = Number($("#clipVal").val().replace(/,/gi, ""));
                var ambilPapVal         = Number($("#papVal").val().replace(/,/gi, ""));
                var ambilPadVal         = Number($("#padVal").val().replace(/,/gi, ""));
                
                var totTjh = 0;
                    if(ambilTenor == '11' || ambilTenor == '12'){
                                    totTjh = ((ambilOtr*1)*(addInsu1Tahun1/100))+((ambilOtr*1)*(addInsu2Tahun1/100))+((ambilOtr*1)*(addInsu3Tahun1/100))+((ambilOtr*1)*(addInsu4Tahun1/100))+((ambilOtr*1)*(addInsu5Tahun1/100))
                                            +(ambilPassangerVal)+(totTjhAmt)+(ambilClipVal)+(ambilPapVal)+(ambilPadVal)
                    }else if(ambilTenor == '23' || ambilTenor == '24'){
                                    totTjh = ((ambilOtr*1)*(addInsu1Tahun1/100))+((ambilOtr*0.9)*(addInsu1Tahun2/100))
                                            +((ambilOtr*1)*(addInsu2Tahun1/100))+((ambilOtr*0.9)*(addInsu2Tahun2/100))
                                            +((ambilOtr*1)*(addInsu3Tahun1/100))+((ambilOtr*0.9)*(addInsu3Tahun2/100))
                                            +((ambilOtr*1)*(addInsu4Tahun1/100))+((ambilOtr*0.9)*(addInsu4Tahun2/100))
                                            +((ambilOtr*1)*(addInsu5Tahun1/100))+((ambilOtr*0.9)*(addInsu5Tahun2/100))
                                            +(ambilPassangerVal)+(totTjhAmt)+(ambilClipVal)+(ambilPapVal)+(ambilPadVal)
                    }else if(ambilTenor == '35' || ambilTenor == '36'){
                                    totTjh = ((ambilOtr*1)*(addInsu1Tahun1/100))+((ambilOtr*0.9)*(addInsu1Tahun2/100))+((ambilOtr*0.8)*(addInsu1Tahun2/100))
                                            +((ambilOtr*1)*(addInsu2Tahun1/100))+((ambilOtr*0.9)*(addInsu2Tahun2/100))+((ambilOtr*0.8)*(addInsu2Tahun2/100))
                                            +((ambilOtr*1)*(addInsu3Tahun1/100))+((ambilOtr*0.9)*(addInsu3Tahun2/100))+((ambilOtr*0.8)*(addInsu3Tahun2/100))
                                            +((ambilOtr*1)*(addInsu4Tahun1/100))+((ambilOtr*0.9)*(addInsu4Tahun2/100))+((ambilOtr*0.8)*(addInsu4Tahun2/100))
                                            +((ambilOtr*1)*(addInsu5Tahun1/100))+((ambilOtr*0.9)*(addInsu5Tahun2/100))+((ambilOtr*0.8)*(addInsu5Tahun2/100))
                                            +(ambilPassangerVal)+(totTjhAmt)+(ambilClipVal)+(ambilPapVal)+(ambilPadVal)
                    }else if(ambilTenor == '47' || ambilTenor == '48'){
                                    totTjh = ((ambilOtr*1)*(addInsu1Tahun1/100))+((ambilOtr*0.9)*(addInsu1Tahun2/100))+((ambilOtr*0.8)*(addInsu1Tahun2/100))+((ambilOtr*0.7)*(addInsu1Tahun2/100))
                                            +((ambilOtr*1)*(addInsu2Tahun1/100))+((ambilOtr*0.9)*(addInsu2Tahun2/100))+((ambilOtr*0.8)*(addInsu2Tahun2/100))+((ambilOtr*0.7)*(addInsu2Tahun2/100))
                                            +((ambilOtr*1)*(addInsu3Tahun1/100))+((ambilOtr*0.9)*(addInsu3Tahun2/100))+((ambilOtr*0.8)*(addInsu3Tahun2/100))+((ambilOtr*0.7)*(addInsu3Tahun2/100))
                                            +((ambilOtr*1)*(addInsu4Tahun1/100))+((ambilOtr*0.9)*(addInsu4Tahun2/100))+((ambilOtr*0.8)*(addInsu4Tahun2/100))+((ambilOtr*0.7)*(addInsu4Tahun2/100))
                                            +((ambilOtr*1)*(addInsu5Tahun1/100))+((ambilOtr*0.9)*(addInsu5Tahun2/100))+((ambilOtr*0.8)*(addInsu5Tahun2/100))+((ambilOtr*0.7)*(addInsu5Tahun2/100))
                                            +(ambilPassangerVal)+(totTjhAmt)+(ambilClipVal)+(ambilPapVal)+(ambilPadVal)
                    }else if(ambilTenor == '59' || ambilTenor == '60'){
                                    totTjh = ((ambilOtr*1)*(addInsu1Tahun1/100))+((ambilOtr*0.9)*(addInsu1Tahun2/100))+((ambilOtr*0.8)*(addInsu1Tahun2/100))+((ambilOtr*0.7)*(addInsu1Tahun2/100))+((ambilOtr*0.7)*(addInsu1Tahun2/100))
                                            +((ambilOtr*1)*(addInsu2Tahun1/100))+((ambilOtr*0.9)*(addInsu2Tahun2/100))+((ambilOtr*0.8)*(addInsu2Tahun2/100))+((ambilOtr*0.7)*(addInsu2Tahun2/100))+((ambilOtr*0.7)*(addInsu2Tahun2/100))
                                            +((ambilOtr*1)*(addInsu3Tahun1/100))+((ambilOtr*0.9)*(addInsu3Tahun2/100))+((ambilOtr*0.8)*(addInsu3Tahun2/100))+((ambilOtr*0.7)*(addInsu3Tahun2/100))+((ambilOtr*0.7)*(addInsu3Tahun2/100))
                                            +((ambilOtr*1)*(addInsu4Tahun1/100))+((ambilOtr*0.9)*(addInsu4Tahun2/100))+((ambilOtr*0.8)*(addInsu4Tahun2/100))+((ambilOtr*0.7)*(addInsu4Tahun2/100))+((ambilOtr*0.7)*(addInsu4Tahun2/100))
                                            +((ambilOtr*1)*(addInsu5Tahun1/100))+((ambilOtr*0.9)*(addInsu5Tahun2/100))+((ambilOtr*0.8)*(addInsu5Tahun2/100))+((ambilOtr*0.7)*(addInsu5Tahun2/100))+((ambilOtr*0.7)*(addInsu5Tahun2/100))
                                            +(ambilPassangerVal)+(totTjhAmt)+(ambilClipVal)+(ambilPapVal)+(ambilPadVal)
                    }
                    console.log("Total tjh",totTjh);
            var totInsu = 0;
            totInsu = insuPremium + totTjh; 
            console.log("Total Insu",totInsu);
            $("#totInsu_tb").val(numberWithCommas(Math.ceil10(totInsu.toFixed(),2)));
        };

        function hitungTdp(){
            var adminFee            = Number($("#admFee_tb").val().replace(/,/gi, ""));
            var provisi             = Number($("#provisi_tb").val().replace(/,/gi, ""));
            // var adminFee            = 3500000;
            // var provisi             = 0.02036;
            var ambilDp             = Number($("#hasildp_tb").val().replace(/,/gi, ""));
            var ambilLoanAmt        = Number($("#lnAmt_tb").val().replace(/,/gi, ""));
            var hasilAngsuran       = Number($("#angsuran_tb").val().replace(/,/gi, ""));
            var ambilInsPlace       = $("#insuPlace_tb").val().replace(/,/gi, "");
            var pymtType            = $("#payType_tb").val().replace(/,/gi, "");
            //var hasilProvisi        = ambilLoanAmt * provisi;
            var hasilProvisi        = Number($("#hasilProvisi_tb").val().replace(/,/gi, ""));
            var asuransi            = Number($("#totInsu_tb").val().replace(/,/gi, ""));

            var tDp = 0;
            if(ambilInsPlace == '3' && pymtType == 'ADDM'){
                tDp = Math.ceil10(ambilDp + adminFee + hasilProvisi + hasilAngsuran + asuransi,2);
                //$("#tDp_tb").val(numberWithCommas(Math.ceil10(ambilDp + adminFee + hasilProvisi + hasilAngsuran + asuransi.toFixed(),-2)));
            }else if (ambilInsPlace == '3' && pymtType == 'ADDB'){
                tDp = Math.ceil10(ambilDp + adminFee + hasilProvisi + asuransi,2);
                //$("#tDp_tb").val(numberWithCommas(Math.ceil10(ambilDp + adminFee + hasilProvisi + asuransi.toFixed(),-2)));
            }else if (ambilInsPlace == '2' && pymtType == 'ADDM'){
                tDp = Math.ceil10(ambilDp + adminFee + hasilProvisi + hasilAngsuran,2);
                //$("#tDp_tb").val(numberWithCommas(Math.ceil10(ambilDp + adminFee + hasilProvisi + hasilAngsuran.toFixed(),-2)));
            }else if (ambilInsPlace == '2' && pymtType == 'ADDB'){
                tDp = Math.ceil10(ambilDp + adminFee + hasilProvisi,2);
                //$("#tDp_tb").val(numberWithCommas(Math.ceil10(ambilDp + adminFee + hasilProvisi.toFixed(),-2)));
            }
            console.log("HItung TDP");                                 
            console.log("DP",ambilDp);                                 
            console.log("adminFee",adminFee);                                 
            console.log("ambilLoanAmt",ambilLoanAmt);                                 
            console.log("provisi",provisi);                                 
            console.log("hasilProvisi",hasilProvisi);                                    
            console.log("tDp",tDp);
            $("#tDp_tb").val(numberWithCommas(tDp));
        };
        
        function hitungPenPel(){
            var Otr        = Number($("#otr_tb").val().replace(/,/gi, ""));
            var ambilDiscount   = Number($("#discount_tb").val().replace(/,/gi, ""));
            var ambilOtr        = Otr-ambilDiscount;

            var ambilTdp            = Number($("#tDp_tb").val().replace(/,/gi, ""));

            var pencairanPel = 0;
            pencairanPel = ambilOtr - ambilTdp;
            $("#pencairanPel_tb").val(numberWithCommas(pencairanPel.toFixed()));
            //$("#pencairanPel2_tb").val(numberWithCommas(pencairanPel.toFixed()));
        }
        function hitungPenPel2(){
            var Otr        = Number($("#otr_tb").val().replace(/,/gi, ""));
            var ambilDiscount   = Number($("#discount_tb").val().replace(/,/gi, ""));
            var ambilOtr        = Otr-ambilDiscount;
            var ambilTdp            = Number($("#tDp_tb").val().replace(/,/gi, ""));

            var pencairanPel = 0;
            pencairanPel = ambilOtr - ambilTdp;
            //$("#pencairanPel_tb").val(numberWithCommas(pencairanPel.toFixed()));
            $("#pencairanPel2_tb").val(numberWithCommas(pencairanPel.toFixed()));
        }

        //hitung PMT effective
        function pmt(){
            console.log("Hitung PMT Effective");
            var totInsu             = Number($("#totInsu_tb").val().replace(/,/gi, ""));
            var ambilTenor          = Number($("#tenure_tb").val().replace(/,/gi, ""));
            var ambilLoanAmt        = Number($("#lnAmt_tb").val().replace(/,/gi, ""));
            var insuPlace           = $("#insuPlace_tb").val();
            var pymtType            = $("#payType_tb").val();
            var ambilFOR            = $("#hasilFOR_tb").val();
            
            var type                = 0;
                if (pymtType == "ADDM") {
                        type        = 1;
                } else if (pymtType == "ADDB") {
                        type        = 0;
                };
            var annualFOR           = (ambilFOR/12)/100;
            var nper                = ambilTenor+type;
            if(insuPlace == 3){
                var pv_ins              = (-ambilLoanAmt);
            }else if (insuPlace == 2){
                var pv_ins              = (-ambilLoanAmt-totInsu);
            }
            var fv                  = 0;

            
            console.log("rate",annualFOR);
            console.log("nper",nper);
            console.log("pv",pv_ins);
            console.log("fv",fv);
            console.log("pymtType",pymtType);
            console.log("type",type);
            var p = Math.pow(1 + annualFOR, nper);
            var a = ((-fv-pv_ins)*p);
            var b = (1+(annualFOR*type));
            var c = (p-1)/annualFOR;
            
            console.log("p",p);
            console.log("a",a);
            console.log("b",b);
            console.log("c",c);
            
            var hasilPmt            = 0;
            hasilPmt                = a/b/c;
            console.log("hasilPMT",hasilPmt);
            $("#pmtEffective_tb").val(hasilPmt);
            console.log("Selesai Hitung PMT Effective");
        }
        //hitung effective rate
        function hitungRate(){
            console.log("Hitung RATE");
            var totInsu                     = Number($("#totInsu_tb").val().replace(/,/gi, ""));
            var ambilLoanAmt                = Number($("#lnAmt_tb").val().replace(/,/gi, ""));
            var insuPlace                   = $("#insuPlace_tb").val();
            var pymtType                    = $("#payType_tb").val();
            var prod_type                   = $("#prodType_tb").val();

            var ambilTenor                  = Number($("#tenure_tb").val().replace(/,/gi, ""));
            if(pymtType == 'ADDM' || pymtType == 'Grace Period'){
                var nper                    = ambilTenor+1;
            }else if(pymtType == 'ADDB'){
                var nper                    = ambilTenor;
            } 
            var pmt                         = Number($("#pmtEffective_tb").val().replace(/,/gi, ""));
            if(insuPlace == 3){
                var pv                      = (-ambilLoanAmt);
            }else if(insuPlace == 2){
                var pv                      = (-ambilLoanAmt-totInsu);
            };
            var type                        = 1;
            var guess                       = 0.00000001;
            var fv                          = 0;

            console.log("nper",nper);
            console.log("pmt",pmt);
            console.log("pv",pv);
            console.log("fv",fv);
            console.log("type",type);
            console.log("guess",guess);
    /*          
            var FINANCIAL_MAX_ITERATIONS = 128;//Bet accuracy with 128
            var FINANCIAL_PRECISION = 0.0000001;//1.0e-8

            var y, y0, y1, x0, x1 = 0, f = 0, i = 0;
            var rate = guess;
            if (Math.abs(rate) < FINANCIAL_PRECISION)
            {
                y = pv * (1 + nper * rate) + pmt * (1 + rate * type) * nper + fv;
            }
            else
            {
                f = Math.exp(nper * Math.log(1 + rate));
                y = pv * f + pmt * (1 / rate + type) * (f - 1) + fv;
            }
            y0 = pv + pmt * nper + fv;
            y1 = pv * f + pmt * (1 / rate + type) * (f - 1) + fv;

            // find root by Newton secant method
            i = x0 = 0.0;
            x1 = rate;
            while ((Math.abs(y0 - y1) > FINANCIAL_PRECISION)
                && (i < FINANCIAL_MAX_ITERATIONS))
            {
                rate = (y1 * x0 - y0 * x1) / (y1 - y0);
                x0 = x1;
                x1 = rate;

                if (Math.abs(rate) < FINANCIAL_PRECISION)
                {
                    y = pv * (1 + nper * rate) + pmt * (1 + rate * type) * nper + fv;
                }
                else
                {
                    f = Math.exp(nper * Math.log(1 + rate));
                    y = pv * f + pmt * (1 / rate + type) * (f - 1) + fv;
                }

                y0 = y1;
                y1 = y;
                ++i;
            }
            //return rate;
    */
            //dari github
            // Set maximum epsilon for end of iteration
            var epsMax = 1e-10;
            
            // Set maximum number of iterations
            var iterMax = 10;

            // Implement Newton's method
            var y, y0, y1, x0, x1 = 0,
                f = 0,
                i = 0;
            var rate = guess;
            if (Math.abs(rate) < epsMax) {
                y = pv * (1 + nper * rate) + pmt * (1 + rate * type) * nper + fv;
            } else {
                f = Math.exp(nper * Math.log(1 + rate));
                y = pv * f + pmt * (1 / rate + type) * (f - 1) + fv;
            }
            y0 = pv + pmt * nper + fv;
            y1 = pv * f + pmt * (1 / rate + type) * (f - 1) + fv;
            i = x0 = 0;
            x1 = rate;
            while ((Math.abs(y0 - y1) > epsMax) && (i < iterMax)) {
                rate = (y1 * x0 - y0 * x1) / (y1 - y0);
                x0 = x1;
                x1 = rate;
                if (Math.abs(rate) < epsMax) {
                    y = pv * (1 + nper * rate) + pmt * (1 + rate * type) * nper + fv;
                } else {
                    f = Math.exp(nper * Math.log(1 + rate));
                    y = pv * f + pmt * (1 / rate + type) * (f - 1) + fv;
                }
                y0 = y1;
                y1 = y;
                ++i;
            }

            console.log("RATE rate", (rate*12)*100);
            console.log("RATE rate di Math Ceil & Math Floor", Math.ceil10(Math.floor10(rate,-9)*12,-4)*100);
            console.log("RATE rate di Math Ceil", Math.ceil10(rate*12,-4)*100);
            console.log("Selesai Hitung RATE");
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS'){
                $("#effectiveRate_tb").val((Math.ceil10(Math.floor10(rate,-9)*12,-4)*100).toFixed(2));
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                $("#effectiveRate_tb").val(((rate*12)*100).toFixed(2));
            }else{
                $("#effectiveRate_tb").val((Math.ceil10(Math.floor10(rate,-9)*12,-4)*100).toFixed(2));
            };
            //$("#effectiveRate_tb").val((Math.ceil10(Math.floor10(rate,-9)*12,-4)*100).toFixed(2));
            //$("#effectiveRate_tb").val(((rate*12)*100).toFixed(2));

        }

        function hitungPmtAngsuran(){
            console.log("Hitung PMT Angsuran");
            var totInsu             = Number($("#totInsu_tb").val().replace(/,/gi, ""));
            var ambilTenor          = Number($("#tenure_tb").val().replace(/,/gi, ""));
            var ambilLoanAmt        = Number($("#lnAmt_tb").val().replace(/,/gi, ""));
            var insuPlace           = $("#insuPlace_tb").val();
            var pymtType            = $("#payType_tb").val();
            var ambilER             = $("#effectiveRate_tb").val();

            var type                = 0;
                if (pymtType == "ADDM") {
                        type        = 1;
                } else if (pymtType == "ADDB") {
                        type        = 0;
                };
            var effectiveRate       = (ambilER/12)/100;
            var nper                = ambilTenor+type;
            var pv                  = (-ambilLoanAmt);
            var fv                  = 0;

            console.log("rate",effectiveRate);
            console.log("nper",nper);
            console.log("pv",pv);
            console.log("fv",fv);
            console.log("pymtType",pymtType);
            console.log("type",type);
            var p = Math.pow(1 + effectiveRate, nper);
            var a = ((-fv-pv)*p);
            var b = (1+(effectiveRate*type));
            var c = (p-1)/effectiveRate;
            
            console.log("p",p);
            console.log("a",a);
            console.log("b",b);
            console.log("c",c);
          
            var hasilPmt            = 0;
            hasilPmt                = Math.ceil10(a/b/c,2);
            console.log("hasilPMT",hasilPmt);
            //$("#angsuran_tb").val(numberWithCommas(Math.ceil10(hasilPmt.toFixed(),2)));
            $("#angsuran_tb").val(numberWithCommas(hasilPmt));
            console.log("Selesai Hitung PMT Angsuran");
        };

        function hitungFlatRate(){
            var ambilAngsuran       = Number($("#angsuran_tb").val().replace(/,/gi, ""));
            var tenor               = Number($("#tenure_tb").val().replace(/,/gi, ""));
            var pymtType            = $("#payType_tb").val();
            if(pymtType == 'ADDM' || pymtType == 'Grace Period'){
                var ambilTenor      = tenor+1;
            }else if(pymtType == 'ADDB'){
                var ambilTenor      = tenor;
            } 
            var ambilLoanAmt        = Number($("#lnAmt_tb").val().replace(/,/gi, ""));

            var a                   = (ambilAngsuran*ambilTenor)-ambilLoanAmt;
            var b                   = ambilLoanAmt;
            var c                   = ambilTenor;
            var hasilFlatRate       = ((a/b/c)*12)*100;
            console.log("flatRate",Math.round10((hasilFlatRate*1000)/1000).toFixed(2));
            $("#flatRate_tb").val(Math.round10(hasilFlatRate.toFixed(2),-2));
        }

        function hitungTotInterest() {
            var ambilAngsuran       = Number($("#angsuran_tb").val().replace(/,/gi, ""));
            var ambilTenor          = Number($("#tenure_tb").val().replace(/,/gi, ""));
            var ambilLoanAmt        = Number($("#lnAmt_tb").val().replace(/,/gi, "")); 
            var pymtType            = $("#payType_tb").val();
            if(pymtType == 'ADDM' || pymtType == 'Grace Period'){
                var totInterest         = (ambilAngsuran*(ambilTenor+1))-ambilLoanAmt;
            }else if(pymtType == 'ADDB'){
                var totInterest         = (ambilAngsuran*ambilTenor)-ambilLoanAmt;
            } 
            /*
            var ambilFlatRate       = Number($("#flatRate_tb").val().replace(/,/gi, ""));
            var ambilLoanAmt        = Number($("#lnAmt_tb").val().replace(/,/gi, ""));
            
            var totInterest         = ((ambilLoanAmt*(ambilFlatRate/100))*ambilTenor)/12;
            */
            console.log("totInterest",totInterest);
            $("#totInterest_tb").val(numberWithCommas(totInterest.toFixed()));
        }

        function cariAdmFeeDanProvisi() {
            var prod_type   = $("#prodType_tb").val();
            var admFee=" ";
            var provisi=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('cariAdmFeeDanProvisi')!!}',
                data:{'prod_type':prod_type},
                success:function(data){
                    admFee = data.adm_fee;
                    console.log("Adm Fee",admFee);
                    $("#admFee_tb").val(admFee);

                    provisi = data.provisi;
                    console.log("provisi",provisi);
                    $("#provisi_tb").val(provisi);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        }

        function hitungAllIncome() {
            var ambilLoanAmt        = Number($("#lnAmt_tb").val().replace(/,/gi, ""));
            var admFee              = Number($("#admFee_tb").val().replace(/,/gi, ""));
            var provisi             = Number($("#provisi_tb").val().replace(/,/gi, ""));
            //var admFee              = 3500000;
            //var provisi             = 0.02036;
            //var hasilProvisi        = provisi * ambilLoanAmt;
            var hasilProvisi        = Number($("#hasilProvisi_tb").val().replace(/,/gi, ""));
            var ambilTotInterest    = Number($("#totInterest_tb").val().replace(/,/gi, ""));
            var totInsu             = Number($("#totInsu_tb").val().replace(/,/gi, ""));

            var allIncome           = (admFee-1000000)+ambilTotInterest+hasilProvisi+(totInsu*0.25);
            console.log("all Income",allIncome);
            $("#allIncome_tb").val(numberWithCommas(allIncome.toFixed()));
        }

        function cariModelRate(){
            var brand_id=$("#brand_tb").val();
            var model_no=$("#model_tb").val();
            var model_rate=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('cariModelRate')!!}',
                data:{'brand_id':brand_id, 'model_no':model_no},
                success:function(data){
                    model_rate = data.model_rate;
                    console.log("Model Rate",data.model_rate);
                    $("#model_rate_tb").val(model_rate);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };

        function cariModelBelowRate(){
            var brand_id=$("#brand_tb").val();
            var model_no=$("#model_tb").val();
            var model_below_rate=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('cariModelRate')!!}',
                data:{'brand_id':brand_id, 'model_no':model_no},
                success:function(data){
                    model_below_rate = data.model_below_rate;
                    console.log("Model Below Rate",data.model_below_rate);
                    $("#model_below_rate_tb").val(model_below_rate);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        };

        function dealerComm(){
            var prod_type           = $("#prodType_tb").val();
            var ambilLoanAmt        = Number($("#lnAmt_tb").val().replace(/,/gi, ""));
            var admFee              = Number($("#admFee_tb").val().replace(/,/gi, ""));
            var provisi             = Number($("#provisi_tb").val().replace(/,/gi, ""));
            //var admFee              = 3500000;
            //var provisi             = 0.02036;
            //var hasilProvisi        = provisi * ambilLoanAmt;
            var hasilProvisi        = Number($("#hasilProvisi_tb").val().replace(/,/gi, ""));
            var ambilTotInterest    = Number($("#totInterest_tb").val().replace(/,/gi, ""));
            var totInsu             = Number($("#totInsu_tb").val().replace(/,/gi, ""));

            var ambilTenor          = Number($("#tenure_tb").val().replace(/,/gi, ""));

            if(prod_type == 'OCRF'){
                if(ambilTenor == '11' || ambilTenor == '12'){
                    var persenRefinancing = 0.025;
                }else if(ambilTenor == '23' || ambilTenor == '24'){
                    var persenRefinancing = 0.03;
                }else if(ambilTenor == '35' || ambilTenor == '36'){
                    var persenRefinancing = 0.04;
                }else if(ambilTenor == '47' || ambilTenor == '48'){
                    var persenRefinancing = 0;                    
                };
            }else if(prod_type == 'OCRH'){
                if(ambilTenor == '11' || ambilTenor == '12'){
                    var persenRefinancing = 0.02;
                }else if(ambilTenor == '23' || ambilTenor == '24'){
                    var persenRefinancing = 0.02;
                }else if(ambilTenor == '35' || ambilTenor == '36'){
                    var persenRefinancing = 0.03;
                }else if(ambilTenor == '47' || ambilTenor == '48'){
                    var persenRefinancing = 0;                    
                };
            };

            var ambilAllIncome           = Number($("#allIncome_tb").val().replace(/,/gi, ""));
            var ambilModel_rate          = Number($("#model_rate_tb").val().replace(/,/gi, ""));
            var ambilModel_below_rate    = Number($("#model_below_rate_tb").val().replace(/,/gi, ""));
            var ambilTotInsu             = Number($("#totInsu_tb").val().replace(/,/gi, ""));
            var ambilDp                  = Number($("#dp_tb").val().replace(/,/gi, ""));
            var ambilBrand_id            = $("#brand_tb").val();
            var dealerComm               = 0;


            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                if(ambilBrand_id == 'MAN' || ambilBrand_id == 'SINOTRUCK'){
                    dealerComm = ambilTotInsu*0.225;
                }else{
                    if(ambilDp <= '30'){
                        dealerComm = ambilAllIncome*(ambilModel_below_rate/100);
                    }else if(ambilDp >= '30'){
                        dealerComm = ambilAllIncome*(ambilModel_rate/100);
                    }
                }
            }else if(prod_type == 'OCIB' || prod_type == 'OCPB'){
                dealerComm           = (ambilTotInterest+(admFee-1000000)+hasilProvisi+(totInsu*0.25))*0.15;
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH'){
                dealerComm           = ambilLoanAmt*persenRefinancing;
            }else{
                if(ambilBrand_id == 'MAN' || ambilBrand_id == 'SINOTRUCK'){
                    dealerComm = ambilTotInsu*0.225;
                }else{
                    if(ambilDp <= '30'){
                        dealerComm = ambilAllIncome*(ambilModel_below_rate/100);
                    }else if(ambilDp >= '30'){
                        dealerComm = ambilAllIncome*(ambilModel_rate/100);
                    }
                }
            };


            

    /*
            if(ambilBrand_id == 'MAN' || ambilBrand_id == 'SINOTRUCK'){
                dealerComm = ambilTotInsu*0.225;
            }else{
                if(ambilDp <= '30'){
                    dealerComm = ambilAllIncome*(ambilModel_below_rate/100);
                }else if(ambilDp >= '30'){
                    dealerComm = ambilAllIncome*(ambilModel_rate/100);
                }
            }
    */
            console.log("Hitung Dealer Comm");
            console.log("Brand",ambilBrand_id);
            console.log("Tot Insurance",ambilTotInsu);
            console.log("DP",ambilDp);
            console.log("All Income",ambilAllIncome);
            console.log("Model Below Rate",ambilModel_below_rate);
            console.log("Model Rate",ambilModel_rate);

            console.log("dealerComm",dealerComm);
            $("#dealerComm_tb").val(numberWithCommas(dealerComm));
        };

        function hitungIncOffice(){
            var prod_type               = $("#prodType_tb").val();
            var ambilTotInsu            = Number($("#totInsu_tb").val().replace(/,/gi, ""));
            var ambilDealerComm         = Number($("#dealerComm_tb").val().replace(/,/gi, ""));
            var incOffice               = 0;


            if(prod_type == 'NCIB' || prod_type == 'NCPB'){
                incOffice                    = ambilTotInsu*0.1;
            }else if(prod_type == 'NCIBS'){
                incOffice                    = ambilTotInsu*0.25;
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                incOffice                    = ambilDealerComm*0.1;
            }else{
                incOffice                    = ambilTotInsu*0.1;
            };

            //incOffice                    = ambilTotInsu*0.1;
            console.log("incOffice",incOffice);
            $("#incOffice_tb").val(numberWithCommas(incOffice));
        };

        function cariSalesRate() {
            var brand_id=$("#brand_tb").val();
            var sales_rate=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('cariSalesRate')!!}',
                data:{'brand_id':brand_id},
                success:function(data){
                    sales_rate = data.brand_rate;
                    console.log("Sales Rate",sales_rate);
                    $("#sales_rate_tb").val(sales_rate);
                },
                error:function(){
                    alert('Ada kesalahan. Mohon Bersabar ini ujian.');
                }   
            })
        }

        function hitungIncNonOffice() {
            var prod_type                   = $("#prodType_tb").val();
            var ambilDealerComm             = Number($("#dealerComm_tb").val().replace(/,/gi, ""));
            var ambilIncOffice              = Number($("#incOffice_tb").val().replace(/,/gi, ""));
            var ambilSalesInc               = Number($("#sales_rate_tb").val().replace(/,/gi, ""));
            var ambilPersenanSales          = Number($("#persenanSales_tb").val().replace(/,/gi, ""));
            var IncNonOffice                = 0;

            /*
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                IncNonOffice                 = ambilDealerComm-ambilIncOffice;
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                incOffice                    = ambilDealerComm*0.9;
            }else{
                IncNonOffice                 = ambilDealerComm-ambilIncOffice;
            };
            */
            IncNonOffice                    = ambilDealerComm-ambilIncOffice;
            console.log("Inc Non Office",IncNonOffice);
            $("#incNonOffice_tb").val(numberWithCommas(IncNonOffice));


            if(prod_type == 'NCIB' || prod_type == 'NCPB'){
                var salesIncentive = IncNonOffice*(ambilSalesInc/100);
            }else if(prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                var salesIncentive = IncNonOffice*(ambilPersenanSales/100);
            }else if(prod_type == 'OCIB' || prod_type == 'OCPB'){
                var salesIncentive = ambilDealerComm*(ambilPersenanSales/100);
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH'){
                var salesIncentive = ambilDealerComm;
            }else{
                var salesIncentive = IncNonOffice*(ambilSalesInc/100);
            };
            //var salesIncentive = IncNonOffice*(ambilSalesInc/100);
            console.log("Hitung Sales Incentive");
            console.log("IncNonOffice",IncNonOffice);
            console.log("ambilSalesInc",ambilSalesInc);
            console.log("Sales Incentive",salesIncentive);
            $("#salesInc_tb").val(numberWithCommas(Math.floor10(salesIncentive.toFixed(),5)));
        }

        function hitungAllIn() {
            var prod_type                   = $("#prodType_tb").val();
            var ambilSalesInc               = Number($("#salesInc_tb").val().replace(/,/gi, ""));
            var ambilPencairanPel           = Number($("#pencairanPel2_tb").val().replace(/,/gi, ""));
            var ambilDealerComm             = Number($("#dealerComm_tb").val().replace(/,/gi, ""));
            var hitungAllIn                 = 0;
            if(prod_type == 'NCIB' || prod_type == 'NCPB' || prod_type == 'NCIBS' || prod_type == 'NCIBS'){
                hitungAllIn                 = ambilPencairanPel + ambilSalesInc;
            }else if(prod_type == 'OCRF' || prod_type == 'OCRH' || prod_type == 'OCIB' || prod_type == 'OCPB'){
                hitungAllIn                 = ambilPencairanPel + ambilDealerComm;
            }else{
                hitungAllIn                 = ambilPencairanPel + ambilSalesInc;
            };
            //hitungAllIn                     = ambilPencairanPel + ambilSalesInc;
            console.log("All in",hitungAllIn);
            $("#allIn_tb").val(numberWithCommas(Math.floor10(hitungAllIn.toFixed(),2)));
        }

        function print() {          
            window.onbeforeprint = function(){
                //$("#sidebar-wrapper").hide();
                $("#btnTr").hide();
                $("#top-menu").hide();
                $("#userDanTanggal").show();
                $(".table_row tbody th").css("text-align","left");
                $(".footer").hide();
                //$("#content-wrapper").css("padding-top", "0px");               
                // $("#footer").css("padding-top","0px");
                // // $("#body").css("color","black");
                // $(".table-calcu").css("border","1px solid black");
                // $(".table-calcu").css("border-collapse","collapse");
                // $(".table-calcu tr").css("border","1px solid black");
                // $(".table-calcu td").css("border","1px solid black");
                // $(".table-calcu th").css("border","1px solid black");
                
            };
            window.onafterprint = function(){
                $("#sidebar-wrapper").show();
                $("#top-menu").show();
                $("#userDanTanggal").hide();
                $("#btnTr").show();         
                $(".footer").show();
                $("#content-wrapper").css("padding-top", "70px");        
            };
            window.print();
        }
        
        function jawaban() {
            var prod_type                   = $("#prodType_tb").val();
            if (prod_type == "OCIB" || prod_type == "OCPB"){
                $("#tdp_tr").show();
                $("#angsuran_tr").show();
                $("#pencairanPel_tr").hide();
                $("#pencairan_tt").hide();
                $("#pencairanPelunasan_tt").hide();
                $("#pencairanPel2_tr").show();
                $("#flatRate_tr").show();
                $("#effectiveRate_tr").show();
                $("#totInsu_tr").show();
            }else{
                $("#tdp_tr").show();
                $("#angsuran_tr").show();
                $("#pencairanPel_tr").show();
                $("#pencairanPel2_tr").hide();
                $("#flatRate_tr").show();
                $("#effectiveRate_tr").show();
                $("#totInsu_tr").show();
            }
            
        }

        function perubahan() {
			cariBaseRate();
            cariDp2();
			cariRateByDp();
            //hitungDPdanLoanAmt();
            cariRateByTenure();
            finalRateByTenure();
			cariRateByInsu();
            cariInsurancePrice1();
            cariInsurancePrice2();
            cariInsurancePrice3();
            cariInsurancePrice4();
            cariRateInsuPremium1();
            cariRateInsuPremium2();
            cariRateInsuPremium3();
            cariRateInsuPremium4();
            cariRateInsuPremium5();
			cariRateInsuTjh1dis1();
            cariRateInsuTjh2dis1();
			cariRateInsuTjh1dis2();
            cariRateInsuTjh2dis2();
			cariRateInsuTjh1dis3();
            cariRateInsuTjh2dis3();
			cariRateInsuTjh1dis4();
            cariRateInsuTjh2dis4();
			cariRateInsuTjh1dis5();
            cariRateInsuTjh2dis5();
			hitungTjh1();
			hitungTjh2();
			hitungTjh3();
			hitungClip();
			hitungPassenger();
			hitungPap();
			hitungPad();
            //hitungTdp();
            hitungTotInsu();
            updateLoanAmt();
            hitungFOR();
            pmt();
            hitungRate();
            hitungPmtAngsuran();
            hitungHasilProvisi();
            hitungTdp();
            hitungPenPel();
            hitungPenPel2();
            hitungFlatRate();
            hitungTotInterest();
            hitungAllIncome();
            dealerComm();
            hitungIncOffice();
            hitungIncNonOffice();
            hitungAllIn();
            // hitungIncNonOffice();
            // hitungAllIn();
        }
        function resetTable() {
            // document.getElementById("tableCalcu").reset();
            // $("#tableCalcu")[0].reset();
            location.reload();
        }

        function cariDp2() {
            var ambilHasilDp    = Number($("#hasildp_tb").val().replace(/,/gi, ""));
            var ambilOtr        = Number($("#otr_tb").val().replace(/,/gi, ""));
            var dpRate          = (ambilHasilDp/ambilOtr)*100;
            console.log(ambilHasilDp)
            console.log(ambilHasilDp)
            console.log(dpRate)
            $("#dp2_tb").val(dpRate);

        }

        function hitungHasilProvisi() {
            var provisi             = Number($("#provisi_tb").val().replace(/,/gi, ""));
            var ambilLoanAmt        = Number($("#lnAmt_tb").val().replace(/,/gi, ""));
            var hasilProvisi        = Math.ceil10(ambilLoanAmt * provisi,2);

            console.log("HItung Hasil Provisi");                                             
            console.log("ambilLoanAmt",ambilLoanAmt);                                 
            console.log("provisi",provisi);                                 
            console.log("hasilProvisi",hasilProvisi);           
            //console.log("hasilProvisi Roundup",Math.ceil10(hasilProvisi,-2).toFixed());           
            $("#hasilProvisi_tb").val(numberWithCommas(hasilProvisi.toFixed()));
        }
        //ini event klik      
        $(document).on('change','#prodType_tb',function(){
            cariProdType();
            muatInsurance();
            cariAdmFeeDanProvisi();
        });

        $(document).on('change','#brand_tb',function(){
            //$("#brand_tb").remove();
            cariModel();
            cariSalesRate();
        });

        $(document).on('change','#model_tb','#dp_tb',function(){
            //$("#model_tb").remove();
            cariVhcType();
            cariOtr();
            cariCategoryNo();
            cariModelRate();
            cariModelBelowRate();
            
        });

        $(document).on('change','#payType_tb',function(){
            //$("#payType_tb").remove();
            cariTenor();
            //updateOtr();
        });

        $(document).on('change','#dp_tb',function(){
            //$("#dp_tb").remove();
            cariRateByDp();
            hitungDPdanLoanAmt();
            cariDp2();
            
        });

        $(document).on('change','#hasildp_tb',function(){
            cariDp2();
        });

        $(document).on('change','#tenure_tb',function(){
            //$("#tenure_tb").remove();
            cariBaseRate();
            cariRateByTenure();
        });
        
        $(document).on('change','#year2_tb',function(){
            cariBaseRate();
        });

        $(document).on('change','#insu_tb',function(){
            /*
            cariRateInsuPremium1();
            cariRateInsuPremium2();
            cariRateInsuPremium3();
            cariRateInsuPremium4();
            cariRateInsuPremium5();
            */
        });

        $(document).on('change','#insuPlace_tb',function(){
            
            var insuPlace = $("#insuPlace_tb").val();
            console.log(insuPlace);
            cariRateByInsu();
            cariInsurancePrice1();
            cariInsurancePrice2();
            cariInsurancePrice3();
            cariInsurancePrice4();
            cariRateInsuPremium1();
            cariRateInsuPremium2();
            cariRateInsuPremium3();
            cariRateInsuPremium4();
            cariRateInsuPremium5();
            finalRateByTenure();
        });

        $(document).on('change','#disaster1_tb',function(){
            
            var disaster1 = $("#disaster1_tb").val();
            cariRateInsuTjh1dis1();
            cariRateInsuTjh2dis1();
        });
        $(document).on('change','#disaster2_tb',function(){
            
            var disaster2 = $("#disaster2_tb").val();
            //console.log(disaster2);
            cariRateInsuTjh1dis2();
            cariRateInsuTjh2dis2();
        });
        $(document).on('change','#disaster3_tb',function(){
            
            var disaster3 = $("#disaster3_tb").val();
            //console.log(disaster3);
            cariRateInsuTjh1dis3();
            cariRateInsuTjh2dis3();
        });
        $(document).on('change','#disaster4_tb',function(){
            
            var disaster4 = $("#disaster4_tb").val();
            //console.log(disaster4);
            cariRateInsuTjh1dis4();
            cariRateInsuTjh2dis4();
        });
        $(document).on('change','#disaster5_tb',function(){
            
            var disaster5 = $("#disaster5_tb").val();
            //console.log(disaster5);
            cariRateInsuTjh1dis5();
            cariRateInsuTjh2dis5();
        });
        
        $(document).on('change','#tjh',function(){
            hitungTjh1();
        });

        $(document).on('change','#tjh2',function(){
            hitungTjh2();
        });

        $(document).on('change','#tjh3',function(){
            hitungTjh3();
        });

        $(document).on('change','#clip',function(){
            hitungClip();
        });
        

        $(document).on('change','#passenger',function(){
            hitungPassenger();
        });

        $(document).on('change','#pap',function(){
            hitungPap();
            //cariBaseRate();
        });
        
        $(document).on('change','#pad',function(){
            hitungPad();
            //hitungTotInsu();
            //updateLoanAmt();
            //console.log($("#lnAmt_tb").val());
            
            //finalRateByTenure();
        });
        
        $(document).on('click','#tombolHitung',function(){
            perubahan()
            jawaban();
            hitungTotInsu();
            updateLoanAmt();
            hitungFOR();
            pmt();
            hitungRate();
            hitungPmtAngsuran();
            hitungTdp();
            hitungPenPel();
            hitungPenPel2();
            hitungFlatRate();
            hitungTotInterest();
            hitungAllIncome();
            dealerComm();
            hitungIncOffice();
            hitungIncNonOffice();
            hitungAllIn();
        });

        $(document).on('click','#tombolPrint',function(){
            print();
        });

        $(document).on('click','#tombolReset',function(){
            resetTable();
        });
        $(document).on('click','#tombolTambahDis2',function(){
            $("#disaster2_tr").show();
        });
        $(document).on('click','#tombolTambahDis3',function(){
            $("#disaster3_tr").show();
        });
        $(document).on('click','#tombolTambahDis4',function(){
            $("#disaster4_tr").show();

        });
        $(document).on('click','#tombolTambahDis5',function(){
            $("#disaster5_tr").show();
        });
    });
</script>
@stop