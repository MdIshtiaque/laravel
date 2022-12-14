<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('include.bootstrap')

    <title>
        @yield('title')
    </title>
</head>

<body>
    @include('include.navbar')

    <div class="container" style="margin: 0px;">
        @yield('content')
    </div>

    @include('include.script')
</body>

</html>
