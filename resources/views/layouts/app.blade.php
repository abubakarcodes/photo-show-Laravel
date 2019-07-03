<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/css/foundation.css">
    <style>
        
 .image-size{
     width:200px;
     height:250px;
 }
    </style>
    <title>Photoshow</title>

</head>
<body>
    @include('inc.topbar')
    <br>
    <div class="grid-container">
        @include('inc.messages')
       @yield('content')
    </div>
</body>
</html>