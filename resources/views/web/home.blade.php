@php
    $heading = 'Home';
@endphp
@extends('web.layout.layout')
@section('content')

    <!-- REVOLUTION SLIDER -->
    <div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
        <div id="rev_slider_34_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>	<!-- SLIDE  -->
                @foreach($sliders as $slide)
                    <!--data-index="rs-100"-->
                    <li data-transition="fade" data-slotamount="default" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"  data-title="{{$slide->title}}" data-description="{{$slide->paragraph}}">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('storage/'.$slide->photo)}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYER NR. 2 -->
                        <h1 class="tp-caption tp-resizeme" data-x="center" data-hoffset="15" data-y="70"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                            data-start="500"
                            data-splitin="none"
                            data-splitout="none"
                            style="z-index: 6;"
                        >
                            <span class="small_title">{{$slide->title}}</span>
                        </h1>
                        <!-- LAYER NR. 2 -->
                        <p class="tp-caption tp-resizeme" data-x="center" data-hoffset="15" data-y="210"
                           data-transform_idle="o:1;"
                           data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                           data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                           data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                           data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                           data-start="800"
                           style="z-index: 9; background: rgba(0, 0, 0, 0.35); padding: 15px; box-sizing: border-box; border-radius: 20px 20px"
                        >{{$slide->paragraph}}</p>
                        <div class="tp-caption fade tp-resizeme"  data-x="center" data-hoffset="15" data-y="280"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                             data-start="800"
                             style="z-index: 9;">
                            <a href="#order-form" class="btn-common btn-white page-scroll">{{$slide->cta}}</a>
                        </div>
                    </li>
                @endforeach
                <!-- SLIDE  -->
            </ul>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
    <!--Features Section-->
    <section class="feature_wrap padding-half" id="specialities">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="heading ">Our &nbsp; Specialities</h2>
                    <hr class="heading_space">
                </div>
            </div>
            <div class="row">
                @foreach($specialities as $specialitie)
                    <div class="col-md-3 col-sm-6 feature text-center">
{{--                        <i class="icon-glass"></i>--}}
                        <img src="{{asset('storage/'.$specialitie->photo)}}" >
                        <h3>{{$specialitie->title}}</h3>
                        <p>{{$specialitie->paragraph}}</p>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!--Services plus working hours-->
    <section id="services" class="padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="heading">Featured &nbsp; Food</h2>
                    <hr class="heading_space">
                    <div class="slider_wrap">
                        <div id="service-slider" class="owl-carousel">
                           @foreach($foods as $food)
                                <div class="item">
                                    <div class="item_inner">
                                        <div class="image">
                                            <img src="{{asset('storage/'.$food->photo)}}" alt="Services Image">
                                        </div>
                                        <h3>{{$food->name}}</h3>
                                        <p>{{$food->paragraph}}</p>
                                    </div>
                                </div>
                           @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2 class="heading">Our &nbsp; Menu</h2>
                    <hr class="heading_space">
                    <ul class="menu_widget">
                        @foreach($menus as $menu)
                            <li>{{$menu->name}}<span>${{$menu->price}}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- facts counter  -->
    <section id="facts">
        <div class="container">
            <div class="row number-counters">
                <!-- first count item -->
                <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="counters-item row">
                        <i class="icon-smile"></i>
                        <h2><strong data-to="{{$facts->happy}}">0</strong></h2>
                        <p>Happy Customers</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="counters-item  row">
                        <i class="icon-food"></i>
                        <h2><strong data-to="{{$facts->dishes}}">0</strong></h2>
                        <p>Dishes Served</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="counters-item  row">
                        <i class="icon-glass"></i>
                        <h2><strong data-to="{{$facts->beverages}}">0</strong></h2>
                        <p>Total Beverages</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="counters-item  row">
                        <i class="icon-coffee"></i>
                        <h2><strong data-to="{{$facts->coffees}}">0</strong></h2>
                        <p>Cup of coffees</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our cheffs -->
    <section id="cheffs" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="heading">Our &nbsp; Kitchen &nbsp; Staff</h2>
                    <hr class="heading_space">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="cheffs_wrap_slider">
                        <div id="our-cheffs" class="owl-carousel">
                            @foreach($stuffs as $stuff)
                                <div class="item">
                                    <div class="cheffs_wrap">
                                        <img src="{{asset('storage/'.$stuff->photo)}}" alt="Kitchen Staff">
                                        <h3>{{$stuff->name}}</h3>
                                        <small>{{$stuff->job_title}}</small>
                                        <p>{{$stuff->description}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testinomial -->
    <section id="testinomial" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="heading">Our &nbsp; happy &nbsp; Customers</h2>
                    <hr class="heading_space">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="testinomial-slider" class="owl-carousel text-center">
                        @foreach($testinomials as $testinomial)
                            <div class="item">
                                <h3>{{$testinomial->paragraph}}</h3>
                                <div>
                                    @for($i = 0; $i < $testinomial->rate; ++$i)
                                        <span class="fa fa-star checked"></span>
                                    @endfor
                                    @for(;$i < 5 ; ++$i)
                                        <span class="fa fa-star"></span>
                                    @endfor
                                </div>
                                <p>{{$testinomial->name}}</p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
