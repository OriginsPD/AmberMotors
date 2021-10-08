<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee | @yield('page_title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<x-employee_navi />
@yield('content')
</body>
</html>
