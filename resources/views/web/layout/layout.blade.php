@php  $settings = \App\Models\Settings::first(); @endphp
@include('web.layout.partials.head')
@include('web.layout.partials.header')
@yield('content')
@include('web.layout.partials.footer')

