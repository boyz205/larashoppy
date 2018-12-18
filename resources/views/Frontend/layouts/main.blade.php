<html>
<head>
    <title>App Name - @yield('title')</title>
    @include('frontend.partials.head')
</head>
<body>
@include('frontend.partials.header')

@section('sidebar')

@show


@yield('content')


@include('frontend.partials.footer')
</body>
</html>