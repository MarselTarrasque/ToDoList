<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do List - by MarselTarrasque</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<style>
    *{
        font-family: "Montserrat", serif;
        font-size: 18px;
        padding: 0;
        margin: 0;
        transition: 0.1s linear;
    }
    body{
        padding: 0;
        margin: 0;
        display: flex;
        background-color: #EDF2F4;
    }
    .container{
        padding: 30px;
        width: 100%;
        max-height: 80vh;
    }
    h1 {
        font-size: 24px;
        padding: 0;
        margin: 0;
    }
    a{
        text-decoration: none;
    }
</style>
<body>
    @include('includes.sidebar')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>