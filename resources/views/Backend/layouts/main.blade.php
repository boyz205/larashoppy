<html>
<head>
    <title>App Name - @yield('title')</title>
    @include('backend.partials.head')
</head>
<body>
@include('Backend.partials.head')

@section('sidebar')

@show


@yield('content')


@include('backend.partials.footer')
</body>
</html>