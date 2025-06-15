<html>

<head>
    <title>@yield('title', 'Laravel App')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        footer {
            margin-top: 50px;
            font-size: 12px;
            color: #aaa;
        }
    </style>
</head>

<body>

    @include('partials.nav')

    <h1>@yield('heading')</h1>

    <div>
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} Belajar Laravel - One Day One Code
    </footer>
</body>

</html>
