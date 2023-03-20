<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akaa App 2.0</title>
    <link rel="stylesheet" href="{{asset('Assets/css/theme_style.css')}}">
</head>
<body class="main-body">
@if($appData->isEmpty())
    @include('auth.register')
    @else
    @include('auth.login')
    @endif
</body>
</html>