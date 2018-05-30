<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
    <title>@yield('title')</title>
</head>
<body class="container">
<img src="http://news.sacus.vn/wp-content/uploads/Vien-Dao-ao-Quoc-te-FPT_Dai-hoc-FPT.jpg" alt="tung" style="background-size: cover; width: 150px; height: 100px;">
    <main>
        @section('content')
        @show
    </main>
</div>
<footer class="container-fluid mt-3 mb-3">
    <p class="text-center">Copyright @2017</p>
</footer>
</body>
</html>