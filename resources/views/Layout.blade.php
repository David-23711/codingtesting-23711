<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
    <title>Document</title>
</head>
<body class="bg-gray-200">
    <div class="overflow-x-hidden ">
       @yield('content')
    </div>
    <script src="./js/app.js"></script>
</body>
</html>