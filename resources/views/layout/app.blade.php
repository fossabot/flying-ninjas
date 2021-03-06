<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <title>@yield('title') - Flying Ninjas</title>
    <meta name="description" content="Flying Ninjas BITCHES!">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Xerrion">

    <meta property="og:type" content="article">
    <meta property="og:title" content="Finish Screencasts">
    <meta property="og:site_name" content="Flying Ninjas">
    <meta property="og:url" content="localhost">
    <meta property="article:published_time" content="2017-02-22">
    <meta property="article:author" content="Xerrion">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<div id="app">
    <header>
        @include('layout.header')
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer class="page-footer blue darken-1">
        @include('layout.footer')
    </footer>
</div>
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>;

</script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>