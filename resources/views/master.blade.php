<!DOCTYPE html>
<html style=" background-image: linear-gradient(maroon, black);" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="color:white; position:absolute; top:5px; left:630px; "> TODOLIST</h1>

    @if(session()->has('success'))
    <p>{{ session()->get('success') }}</p>
    @endif

    @yield('content')
</body>
</html>
