@extends('layout.app')
@section('title', 'User Login')

@section('main_content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h3 class="text-center m-4">User Register</h3>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group my-2">
                    <input type="text" name="name" placeholder="Enter your Name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Enter your email" class="form-control">
                </div>
                <div class="row  my-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" placeholder="password" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            <input type="password" name="password_confirmation" placeholder="password Confirm" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group d-flex justify-content-evenly my-4">
                    <button class="btn btn-sm btn-success px-4">Register</button>
                    <a href="{{ route('login') }}" class="btn btn-sm btn-info px-4" >Go to Login</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
