@extends('admindek::master')
@section('master_css')
@stack('css')
@yield('css')
@stop
@section('body')
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">
    @include('admindek::partials.navbar')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            @include('admindek::partials.sidebar')
            <div class="pcoded-content" id="appBox">
                @yield('content')
            </div>
            <div id="styleSelector">
            </div>
        </div>
    </div>
</div>
@stop
@section('master_js')
@stack('js')
@yield('js')
@stop
