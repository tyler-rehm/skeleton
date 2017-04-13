<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title', config('app.name'))</title>

    @include('partials._css')
    @yield('css')
</head>

<body>
@include('partials._google_analytics')

<div id="wrapper">
    @include('partials._nav')
    <div id="page-wrapper" class="gray-bg dashbard-1">
        @include('partials._header')

        @yield('content')

        @include('partials._footer')
    </div>

    @if(!empty(env('CHAT_ENABLED')))
        @include('partials._chat')
    @endif

    @include('partials._sidebar_right')
</div>

@include('partials._js')
@yield('js')
</body>
</html>