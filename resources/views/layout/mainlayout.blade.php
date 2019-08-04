<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    @include('layout.partials.head')
</head>
<body dir="rtl">

@include('layout.partials.nav')
@include('layout.partials.header')
@yield('content')
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
</body>
</html>