


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
            <h2 class="title">Thank you for the registration,</h2>
            <p class="description">
                please save the code below <br> for later use.
            </p>

            <div class="d-flex justify-content-center">
                <div class="code">
               {{--  <p class="text-white text-center bg-opacity-20" style="opacity: 54%;">  --}}
                <p class="text-white text-center bg-opacity-20" style="opacity: 54%;">

                   your code is :
                 </p>
               <div class="d-flex justify-content-around">

             <P  class="text-white" id="verfiy-code">  {{$user->verification_code}} </P>
             
                <button class="copybtn">

                    <i class="far fa-clone"></i> copy
                </button>

       
                </div>
            </div>
        </div>
        <div class="link">

            <a href="{{route('verfiy')}}" class="">Okay</a>
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
