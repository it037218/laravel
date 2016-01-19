<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    {{--<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">--}}
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
        @yield("content")
    </div>
</body>
</html>