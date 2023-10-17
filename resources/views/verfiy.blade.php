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
                <h3 style="    color: #3652A4;">Please enter the code</h3>
                <p class="verify">to verify your attendance</p>
            </div>

            <form action="{{route('verifyCode')}}" method="POST" class="form-register">
                @csrf
                <div class="forms">
 <h1>{{  $user->verification_code}}</h1>
                    <label for="" id="label">Your Code</label>
            <input type="text" class="input" name="verification_code">
                 @if($errors->has('verification_code'))
                <div class="error text-danger">{{ $errors->first('verification_code') }}</div>
                @endif
          
                </div>

                               <button class="button">Confirm</button>

                </form>
        </div>

        <div class="col-lg-6 p-0">

            <img src="{{ asset('image/bg.png') }}" class="register-photo">
        </div>
    </div>
</div>





</body>
<script src="{{ asset('js/min.js') }}"></script>
</html>
