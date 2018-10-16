<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hamidteimouri</title>
    <link rel="stylesheet" ref="/css/app.css">

</head>
<body>

<div id="app">
    @yield('content')
</div>
<script src="/js/app.js"></script>
</body>
</html>
