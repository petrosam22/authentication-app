<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>web app</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-4" style="background: #ffc0cb63;">
            <img src="{{ asset('image/roche.png') }}" class="log-image">
            <h2 class="title">Beyond innovation</h2>
            <p class="description">
                Together,<br> transforming healthcare
            </p>
            <form action="{{ route('register') }}" class="form-register" method="POST" >
                @csrf
               <div class="forms">
                <label for="" id="label">Full Name</label>
                <input type="text" class="input" name="name">
                @if($errors->has('name'))
                <div class="error text-danger">{{ $errors->first('name') }}</div>
                @endif

                
                <label for="" id="label">Job Title</label>
                <input type="text" class="input" name="job">
                @if($errors->has('job'))
                <div class="error text-danger">{{ $errors->first('job') }}</div>
                @endif

                <label for="" id="label">Organization</label>
                <input type="text" class="input" name="organization">
      @if($errors->has('organization'))
                <div class="error text-danger">{{ $errors->first('organization') }}</div>
                @endif
                <label for="" id="label">Email Address</label>
                <input type="text" class="input" name="email">
                  @if($errors->has('email'))
                <div class="error text-danger">{{ $errors->first('email') }}</div>
                @endif
                <label for="" id="label">Password</label>
                <input type="password" class="input" name="password">
                @if($errors->has('password'))
                <div class="error text-danger">{{ $errors->first('password') }}</div>
                @endif

                <label for="" id="label">Contact Number</label>
                <input type="text" class="input" name="number">
                @if($errors->has('number'))
                <div class="error text-danger">{{ $errors->first('number') }}</div>
                @endif
               </div>

               <button class="button">Submit</button>
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
