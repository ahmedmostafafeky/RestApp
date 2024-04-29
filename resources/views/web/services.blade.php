@php
    $heading = 'Services';
@endphp
@extends('web.layout.layout')
@section('content')
    <!-- Blogs -->
    <section id="blog" class="padding-top">
        <div class="container">
            @foreach($services as $service)
                <div class="blog_item padding-bottom">
                    <h2>{{$service->title}}</h2>
                    <div class="image_container">
                        <img src="{{asset('storage/'.$service->photo)}}" class="img-responsive" alt="blog post">
                    </div>
                    <p>{{$service->desc}}</p>
                </div>
            @endforeach
        </div>
    </section>

@endsection
