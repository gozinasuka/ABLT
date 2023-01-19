<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} | ABLT</title>
    <link rel="stylesheet" href="<?php echo asset('css/app.css') ?>">
</head>

<body>

    {{--  @include('layout.navbar') --}}
    <x-navbar></x-navbar>


    {{-- Penggunaan php normal --}}
    {{-- <?php echo $slot?> --}} 

    {{$slot}}
    

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
