<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DMCA App</title>

    <link rel="stylesheet" href="/css/all.css">

</head>
<body>
    @include('partials.nav')

    <div class="container">
        @include('flash::message')
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="flash">
        Updated !
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/js/all.js"></script>

</body>
</html>