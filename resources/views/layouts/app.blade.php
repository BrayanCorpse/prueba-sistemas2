<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Let's Kinky</title>
    <link rel="shortcut icon" href="{{asset('img/kinky.png')}}" type="image/x-icon">

    {{-- Css --}}
    <link rel="stylesheet" href="{{asset('css/uikit.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- Js --}}
    <script src="{{asset('js/uikit.min.js')}}"></script>
    <script src="{{asset('js/uikit-icons.min.js')}}"></script>
</head>
<body>

    <div class="uk-container" uk-margin>
        <div class="uk-margin-medium-top b-prn">
            <a href="{{url('/')}}">
                <div class="b-bg-img" ></div>
            </a>     
        </div>
    </div>

    <div class="uk-container" uk-margin>
        @yield('content')
    </div>
    
</body>
</html>
