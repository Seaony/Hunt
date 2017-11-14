<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="api-token" content="Bearer {{ !auth()->check() ?:auth()->user()->api_token }}">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}"/>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body class="hold-transition sidebar-mini skin-blue">
@yield('body')
<a href="javascript:void(0);" id="anchor"></a>
</body>
</html>
