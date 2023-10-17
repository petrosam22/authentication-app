<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>web app</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-4" style="background: #ffc0cb63;">
            <img src="{{ asset('image/roche.png') }}" class="log-image">
            <h2 class="title">Beyond innovation</h2>
            <p class="description">
                Together, transforming healthcare
            </p>
            {{--    --}}

            <div class="text-center mt-5 pt-5">
                <i class="fas fa-check"></i>
                <h4 style="    color: #3652A4;">Thanks for attending the event</h4>
                <p class="verify">Code entered successfully</p>
            </div>

         
        </div>

        <div class="col-lg-6 p-0">

            <img src="{{ asset('image/bg.png') }}" class="register-photo">
        </div>
    </div>
</div>





</body>
<script src="{{ asset('js/min.js') }}"></script>
</html>
