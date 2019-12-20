<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=  {{ asset("css/bootstrap.min.css") }}>

    <title> NewsApp </title>
</head>
<body>

    <div class="container">
        <!-- Header e navbar -->
        @include('layouts.nav')

        
        <!-- Conteúdo -->
        @yield('conteudo')


        <!-- Footer -->
        @include('layouts.footer')
    </div>

   

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src = {{ asset("js/bootstrap.min.js") }}></script>
    <script src="//assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js"></script>
</body>
</html>