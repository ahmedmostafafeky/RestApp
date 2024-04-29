@auth
@php
    $settings = \App\Models\Settings::first();
@endphp
@include('adminpanel.layouts.partial.head')

@include('adminpanel.layouts.partial.header')
<div class="content-wrapper">
    <div style="width:95%; margin: auto">
        <div class="row justify-content-center w-100">
            <div class="w-100 mt-3">
                @yield('content')
            </div>
        </div>
    </div>
</div>

@include('adminpanel.layouts.partial.footer')
@endauth
