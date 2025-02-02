<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('summernote/summernote.css')}}">

    @vite('resources/css/tabler_rtl.css')
    @yield('custom_css')
    @livewireStyles
</head>
<body>

@yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{asset('summernote/summernote.js')}}"></script>

@vite('resources/js/tabler.js')
@livewireScripts
@yield('custom_js')
</body>
</html>
