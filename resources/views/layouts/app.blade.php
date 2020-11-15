<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Let's Kinky</title>

    {{-- Css --}}
    <link rel="stylesheet" href="{{asset('css/uikit.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- Js --}}
    <script src="{{asset('js/uikit.min.js')}}"></script>
</head>
<body>

    <div class="uk-container" uk-margin>
        <div class="uk-margin-medium-top">
            <img data-src="{{asset('img/kinkyh.png')}}" alt="Image" width="360" height="100" uk-img>
        </div>
    </div>

    <div class="uk-container" uk-margin>
        @yield('content')
    </div>
    
</body>
</html>