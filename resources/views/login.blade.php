@extends('layout.app')

    @section('content')
    <div class="container" style="height: 90%">
        @if(Session::has('fail'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('fail')}}
        </div>
        @endif
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-5">
                <div class="box shadow bg-white p-4">

                    <h1 class="text-center">Login</h1>
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="col-6 mx-auto">    
                <label for="" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="" placeholder="name@example.com"><br>
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="" placeholder="Your password"><br>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
        </div>
        </div>
    </div>
</div>
    @endsection