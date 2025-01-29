<!doctype html>
<html lang="en"  dir="rtl" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>
    @vite('resources/css/tabler_rtl.css')
    @yield('custom_css')
    @livewireStyles
</head>
<body>

@yield('content')

@vite('resources/js/tabler.js')
@livewireScripts
@yield('custom_js')
</body>
</html>
