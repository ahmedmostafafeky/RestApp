@php
    $heading = 'About Us';
    $categories = [];

    foreach($stuffs as $stuff)
        $categories[] = str_replace(' ', '',$stuff->category);
    $categories = array_unique($categories);
@endphp

@extends('web.layout.layout')
@section('content')

    <section id="overview" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>{{$about->title}}</h2>
                    <hr class="heading_space">
                    <p>{{$about->paragraph}}</p>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="work-filter">
                        <ul class="text-center">
                            <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
                            @foreach($categories as $category)
                                <li><a href="javascript:;" data-filter=".{{$category}}" class="filter">{{$category}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                    <div class="row">
                        <div class="zerogrid">
                            <div class="wrap-container">
                                <div class="wrap-content clearfix">
                                    @foreach($stuffs as $stuff)
                                        <div class="col-1-3 mix work-item {{str_replace(' ', '', $stuff->category)}} heading_space">
                                        <div class="wrap-col">
                                            <div class="item-container">
                                                <div class="image">
                                                    <img src="{{asset('storage/'.$stuff->photo)}}"  alt="cook"/>
                                                    <div class="overlay">
                                                        <div class="overlay-inner">
                                                            <ul class="social_icon">
                                                                <li><a href="#" class="facebook"><i class="icon-facebook5"></i></a></li>
                                                                <li><a href="#" class="twitter"><i class="icon-twitter4"></i></a></li>
                                                                <li><a href="#" class="google"><i class="icon-google"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gallery_content text-left">
                                                    <h3> {{$stuff->name}}</h3>
                                                    <small>{{$stuff->job_title}}</small>
                                                    <p>{{$stuff->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
@endsection
