<!DOCTYPE html>
<html lang="zh" ng-app="rixiApp">
<head>
    <meta charset="utf-8">
    <title>@yield('title')_日系问答</title>
    <meta name="description" content="@yield('meta_desc', '日系问答，专注日系、日本问题解答。日系化妆、日系搭配、日系发型，帮助解答关于日本的一切问题。')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ elixir("css/app.css") }}" rel="stylesheet">

    @yield('custom_header')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/vendor/html5shiv.js"></script>
    <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body>

@include('shared._tag')
@yield('content')

<script src="/js/vendor/jquery.min.js"></script>
<script src="/js/flat-ui-pro.js"></script>
<script src="{{ elixir("js/app.js") }}"></script>

</body>
</html>
