<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <a href="/">Posts</a>
        <ul>
           <a href="/post/create"><li>New Post</li></a>
        </ul>
    </nav>
    @include('flash_message')
    @yield('main')
</body>
</html>