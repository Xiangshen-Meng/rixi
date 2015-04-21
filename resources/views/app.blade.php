<!DOCTYPE html>
<html lang="zh" ng-app="rixiApp">
<head>
    <meta charset="utf-8">
    <title>@yield('title') - 日系问答</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ elixir("css/app.css") }}" rel="stylesheet">

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
<script src="/js/vendor/ckeditor/ckeditor.js"></script>
<script src="{{ elixir("js/app.js") }}"></script>

</body>
</html>
