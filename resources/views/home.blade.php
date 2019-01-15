<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
@include('includes.css')
    <title>Document</title>
</head>
<body>
@include('includes.header')
<div class="container">
    <div class="row">
        <div class="col-lg-12">

            @yield('content')

        </div>
    </div>
</div>
@include('includes.script')
</body>
</html>


