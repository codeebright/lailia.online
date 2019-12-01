<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    @include('layout_front.partials.head')
</head>
<body dir="rtl">
@include('layout_front.partials.nav')
{{-- @include('layout_front.partials.header') --}}
@include('auth.login')

@yield('content')
@include('layout_front.partials.footer')
@include('layout_front.partials.footer-scripts')
</body>
</html>
