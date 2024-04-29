@php
    $heading = 'Contact Us';
@endphp
@extends('web.layout.layout')
@section('content')
    <div class="row bg_grey">
        <div class="container">
            <div class="row" style="margin-top: 10px; margin-bottom: 10px">
                <div class="col-md-6" style="border-right: 2px solid #eb511473;">
                    <div>
                        <form class="form-horizontal newsletter" action="{{route('contactsView.store')}}" method="post" >
                            @csrf
                            <fieldset>
                                <h3 class="heading mb-5">Contact us</h3>

                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3" for="name">Name</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3" for="email">Your E-mail</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                    </div>
                                </div>

                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3" for="message">Your message</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control"   style="height: auto; border-radius: 5px;" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn-submit button3">Send</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newsletter">
                        <h3 class="heading mb-5">Get in Touch</h3>
                        <h4 class="address form-group text-left"><i class="icon-location"></i> {{$contacts[4]->value}}</h4>
                        <h4 class="address form-group"><i class="fa fa-phone"></i> {{$contacts[3]->value}}</h4>
                        <h4 class="address form-group"><i class="icon-dollar"></i><a href="mailto:{{$contacts[2]->value}}?subject=I Want To Order"> {{$contacts[2]->value}}</a></h4>
                        <h4 class="address form-group"><i class="fa fa-facebook"></i><a href="{{$contacts[0]->value}}"> Visit Us </a></h4>
                        <h4 class="address form-group"><i class="icon-twitter4"></i><a href="https://www.x.com/{{$contacts[1]->value}}"> Visit Us</a></h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
@endsection
