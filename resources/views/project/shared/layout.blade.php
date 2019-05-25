<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <title>@yield('title')</title>
</head>
<body>


    @if(! (request()->url() == route('login')))
        <a style="float: right" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>
    @endif


    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>


<div class="container">
        @section('content')
            <h1>@yield('title')</h1>
            @show
    </div>
    <script type="text/javascript" src="{{ asset('vendor/jquery.min.js') }}"></script>
    <script src="{{asset('js/admin.js')}}"></script>
</body>
</html>