@extends('website.master')
@section('content')
            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <!-- <li data-target="#carousel" data-slide-to="2"></li> -->
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="builerz-master/img/skbf/mv3.png" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInRight">Greater Value Together!</h1>
                            <p style="font-size: 15px; text-align: center;" class="animated fadeInLeft">
                                <span>Financial car leasing service company in Indonesia
								with focus on business growth</span> <span>quality customer
								service and strengthening the management foundation.</span> <span>strengthening
								the management foundation!</span>
                            </p>
                            <br><br>
                            <a class="btn animated fadeInUp" href="/corpInfo">Read More</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="builerz-master/img/skbf/mv1.png" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">
                                <span>Global Network</span><br>
                                <span> SKBF Indonesia</span>
                            </h1>
                            <p  style="font-size: 15px; text-align: center;" class="animated fadeInRight">
                                <span>Financial car leasing service company with </span> <span>focus
								on business growth quality customer</span> <span>service and
								strengthening.</span>
                            </p>
                            <br><br>
                            <a class="btn animated fadeInUp" href="/corpInfo">Read More</a>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->
@stop
