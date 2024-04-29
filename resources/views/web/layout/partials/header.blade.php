<body>

<!--Loader-->
<div class="loader">
    <div class="cssload-container">
        <div class="cssload-circle"></div>
        <div class="cssload-circle"></div>
    </div>
</div>

<!--Topbar-->
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="pull-left hidden-xs">{{$settings->alt}}</p>
                <p class="pull-right"><i class="fa fa-phone"></i>Order Online 111-123-6789</p>
            </div>
        </div>
    </div>
</div>

<!--Header-->
<header id="main-navigation">
    <div id="navigation" data-spy="affix" data-offset-top="20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="false">
                                <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span>
                            </button>
                            <a class="navbar-brand"  href="{{route('home.index')}}"><img src="{{asset('storage/'.$settings->site_logo)}}" alt="logo" class="img-responsive"></a>
                        </div>

                        <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li><a href="{{route('homeView.index')}}">Home</a></li>
                                <li><a href="{{route('servicesView.index')}}">Service</a></li>
                                <li><a href="{{route('aboutsView.index')}}">About</a></li>
                                <li><a href="{{route('contactsView.index')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
{{--@dd([$_SERVER["REQUEST_URI"] , Route::getCurrentRoute()->name('homeView')->uri])--}}
@if( $_SERVER["REQUEST_URI"] != Route::getCurrentRoute()->name('homeView')->uri)
    <!--Page header & Title-->
    <section id="page_header">
        <div class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">{{$heading}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

