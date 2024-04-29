<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('home.index')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('contacts.index')}}" class="nav-link">Contact</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('about.index')}}" class="nav-link">About</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('services.index')}}" class="nav-link">Services</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('settings.index')}}" class="nav-link">Settings</a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('homeView.index')}}" class="brand-link">
            <img src="{{asset('storage/'.$settings->fav_icon)}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">{{config('app.name')}}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    <a href="{{ route('logout') }}" class="d-block"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a href="{{ route('adduser.index') }}" class="d-block">
                        Add New User
                    </a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-header">PAGES</li>

                    <li class="nav-item">
                        <a href="{{route('home.index')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Home
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">

                        <a href="{{route('contacts.index')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Contact Us
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('about.index')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                About Us
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('services.index')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Services
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('settings.index')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Settings
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</div>

@if(session('status'))
    <div class="alarting">
        {{ session('status') }}
    </div>
@endif
