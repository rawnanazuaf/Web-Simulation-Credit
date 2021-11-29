@extends('website.master')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>KB Capital</h2>
                </div>
                <div class="col-12">
                    <a href="/indexWeb">Home</a>
                    <a href="#">KB Capital</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->    
    <!-- Single Post Start-->
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="about-text">
                    <div class="single-content wow fadeInUp">
                        <h2 style="text-align: center;">
                            KB Capital
                        </h2>
                        <p style="text-align: center;">
                            <span>KB Capital strives to be a company with customer’s need as our priority.</span> 
                            <span>Going forward, we have a clear vision and  a definite goal for the future</span>
                        </p><br>
                        <h5 style="text-align: center;">
                            We are a global financial institution leading the Asian financial industry
                        </h5>
                        <p style="text-align: center;">
                            <span>KB Capital is a specialized credit financial company that mainly engages in Automotive</span> 
                            <span>installment loans, automotive lease, personal and corporate credit, mortgage loan.</span>
                        </p>
                        <img src="builerz-master/img/skbf/skbf_kbCapital.png" /><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table id="dataTableOC" class="table table-bordered display responsive" width="100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>2014</th>
                                    <th>2015</th>
                                    <th>2016</th>
                                    <th>2017(Consolidated)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Total Assets</th>
                                    <td>3,696</td>
                                    <td>4,764</td>
                                    <td>6,185</td>
                                    <td>7,832</td>                       
                                </tr>
                                <tr>
                                    <th>Total Equity</th>
                                    <td>391</td>
                                    <td>493</td>
                                    <td>669</td>
                                    <td>856</td>                       
                                </tr>
                                <tr>
                                    <th>Net Income(Accum.)</th>
                                    <td>30</td>
                                    <td>54</td>
                                    <td>80</td>
                                    <td>108</td>                       
                                </tr>
                                <tr>
                                    <th>ROE(Accum.)</th>
                                    <td>7.84%</td>
                                    <td>1.36%</td>
                                    <td>1.50%</td>
                                    <td>1.48%</td>                       
                                </tr>
                                <tr>
                                    <th>ROA(Accum.)</th>
                                    <td>0.83%</td>
                                    <td>1.36%</td>
                                    <td>1.50%</td>
                                    <td>1.48%</td>                       
                                </tr>
                            </tbody>
                        </table>
    <!-- Single Post End-->     
<script>
    $(document).ready(function () {
        $('#dataTableOC').DataTable({
        "scrollY": "600px",
        "scrollCollapse": true,
        });
        $('.dataTables_length').addClass('bs-select');
    });    
</script>
@stop