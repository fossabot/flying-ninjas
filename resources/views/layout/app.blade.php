<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <title>@yield('title') - Flying Ninjas</title>
    <meta name="description" content="Flying Ninjas BITCHES!">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Xerrion">
    <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="{{ asset(mix('js/manifest.js')) }}"></script>
    <script src="{{ asset(mix('js/vendor.js')) }}"></script>
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
<script src="{{ asset(mix('js/app.js')) }}"></script>
</body>
</html>