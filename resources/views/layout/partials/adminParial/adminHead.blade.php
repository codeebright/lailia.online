<!doctype html>
<html lang="en">
<head>
    @yield('head')
    <meta charset="UTF-8">
    <title>adminHead</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <link rel="stylesheet" href="{{asset('bootstraprtl/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstraprtl/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('bootstraprtl/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('bootstraprtl/css/teststyle.css')}}">
    <link rel="stylesheet" href="{{asset('bootstraprtl/css/teststyle2.css')}}">
    <link href="{{asset('bootstraprtl/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('bootstraprtl/css/select2.min.css')}}" rel="stylesheet" media="all">
</head>

@yield('content')




@yield('footer')
<script src="{{asset('bootstraprtl/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('bootstraprtl/js/popper.min.js')}}"></script>
<script src="{{asset('bootstraprtl/js/bootstrap.min.js')}}"></script>
<script src="{{asset('https://cdn.rawgit.com/enyo/dropzone/master/dist/dropzone.js')}}"></script>
<script src="{{asset('bootstraprtl/js/slick2.min.js')}}"></script>
<script src="{{asset('bootstraprtl/js/wow.min.js')}}"></script>
<script src="{{asset('bootstraprtl/js/animsition.min.js')}}"></script>
<script src="{{asset('bootstraprtl/js/bootstrap-progressbar.min.js')}}"></script>
<script src="{{asset('bootstraprtl/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('bootstraprtl/js/circle-progress.min.js')}}"></script>
<script src="{{asset('bootstraprtl/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('bootstraprtl/js/}Chart.bundle.min.js')}}"></script>
<script src="{{asset('bootstraprtl/js/select2.min.js')}}"></script>
<script src="{{asset('bootstraprtl/js/main.js')}}"></script>
</html>