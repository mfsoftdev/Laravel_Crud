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
        <div class="container">

            <h1 class="mt-5 fw-bold text-info">HOME PAGE</h1>
            <a href="/adduserpage" class="btn btn-outline-info my-5">Add User</a>
        </div>
            <div class="container mb-5 table-responsive table-responsive-md table-bordered">
                <h3>ALL USERS DATA</h3>
                <table class="table table-hover table-striped table-info text-center">
                    <thead class="table-dark ">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>EMAIL</th>
                                <th>PASSWORD</th>
                                <th>UPDATE USER</th>
                                <th>DELETE USER</th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $i)
                        <tr>
                            <td class="fw-bold">{{$i->id}}</td>
                            <td class="fw-bold">{{$i->name}}</td>
                            <td class="fw-bold">{{$i->email}}</td>
                            <td class="fw-bold">{{$i->password}}</td>
                            <td> <a href="{{ Route('getuser',$i->id)}}" class="btn btn-outline-dark btn-sm">Update User</a></td>
                            <td> <a href="{{ Route('deleteuser',$i->id)}}" class="btn btn-outline-danger btn-sm">Delete User</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
    </body>
    </html>
    