<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">

@yield('meta_tags')

@include('frontend.layouts.header')
@include('frontend.layouts.navbar')
@yield('styles')

</head>
<body>

        @yield('content')
        @include('frontend.layouts.models')

        @include('frontend.layouts.footer')

        @include('frontend.layouts.script')

        @yield('script')

</body>

</html>
