<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/bootstrap-4.5.0/css/bootstrap.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="/assets/bootstrap-3.3.7/css/bootstrap.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="/assets/bootstrap-3.3.7/css/bootstrap-theme.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="/assets/slick/css/slick.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="/assets/slick/css/slick-theme.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="/assets/fontawesome-free-5.15.3-web/css/all.min.css" />
    <link href="/css/home/app.css" rel="stylesheet">
    <link href="/css/home/header.css" rel="stylesheet">
    <link href="/css/home/menu.css" rel="stylesheet">
    <link href="/css/home/footer.css" rel="stylesheet">

    @yield('css')

</head>

<body class="">

    @include('Home.Header')
    @include('Home.Menu')
    @yield('body')
    @include('Home.Footer')

    <script src="/assets/jquery/js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="/assets/bootstrap-4.5.0/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/jquery/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="/assets/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/bootstrap-3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/js/common/jquery-form.js" type="text/javascript"></script>
    <script src="/js/common/jquery-cookie.js" type="text/javascript"></script>
    <script src="/assets/slick/js/slick.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    @yield('scripts')
</body>

</html>