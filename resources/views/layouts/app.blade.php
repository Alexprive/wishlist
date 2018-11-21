<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .textcenter {
            text-align: center;
        }

        .top10 {
            margin-top: 10px;
        }

        .top20 {
            margin-top: 20px;
        }

        .padding15 {
            padding: 15px;
        }

        .formdiv {
            width: 500px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border: solid 2px black;
            box-shadow: 10px 10px 5px rgba(58, 58, 58, 0.3);
            -webkit-box-shadow: 10px 10px 5px rgba(58, 58, 58, 0.3);
            -moz-box-shadow: 0px 10px 5px rgba(58, 58, 58, 0.3);
        }

        .center {
            margin: auto;
            text-align: center;
        }
    </style>
</head>

<body>
@include('inc.navbar')
<div class="container">
    <main class="py-4">
        @include('inc.messages')
        @yield('content')
    </main>
</div>
</body>
</html>
