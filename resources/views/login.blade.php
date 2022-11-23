@extends('layout.app')

    @section('content')

        <form action="{{route('login')}}" method="post">
            <div class="col-6 mx-auto">    
                <label for="" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="" placeholder="name@example.com"><br>
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="" placeholder="Your password"><br>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    @endsection