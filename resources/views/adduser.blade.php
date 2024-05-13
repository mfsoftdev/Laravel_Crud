<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


        <!-- Styles -->
        <style>
            body{
                background-color: black;
                color: white;
                font-family:  'figtree';
            }
        </style>
    </head>
    <body >
<h1 class="text-center text-info fw-bold my-3">ADD USER PAGE</h1>

<div class="container">

    
    <div class="col-6 d-block mx-auto mt-5">
        {{-- <h4 class="fw-bold ">ADD USER FORM</h4> --}}
        <form action="{{route('adduser')}}" method="post" >
            @csrf
            <label for="name" class="form-lable fs-4 text-info">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter User Name"> <br>
            <label for="email" class="form-lable fs-4 text-info">Email</label>
            <input type="email" name="email"  class="form-control" placeholder="Enter User Email"> <br>
            <label for="password" class="form-lable fs-4 text-info">Password</label>
            <input type="password" name="password"  class="form-control" placeholder="Enter User Password"> <br>
            <div class="d-flex justify-content-between gap-2">
                <button type="button" class="btn btn-outline-info btn-sm w-50 px-5" onclick="history.back()">BACK</button>
                <button type="submit" class="btn btn-outline-info btn-sm w-50 px-4">ADD USER</button>
            </div>
        </form>
    </div>
</div>

    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</body>
</html>
