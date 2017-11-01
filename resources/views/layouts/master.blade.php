<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/js/bootstrap.jss" rel="stylesheet" type="text/css">
    {{--  <link href="/css/master.css" rel="stylesheet" type="text/css">  --}}
</head>
<body>
    <div class="container-fluid">
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/article">Article</a>
        </nav>
    </header>
    
    @yield ('content')

    <footer>
        <p>
            &copy Belajar laravel
        </p>
    </footer>
    </div>




</body>
</html>