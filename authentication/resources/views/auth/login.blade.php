@extends('layout.app')
@section('title', 'User Login')

@section('main_content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h3 class="text-center m-4">User Login</h3>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="email" name="email" placeholder="Enter your email" class="form-control">
                </div>
                <div class="form-group my-4">


                    <input type="password" name="password" placeholder="password" class="form-control">
                </div>
                <div class="form-group d-flex justify-content-evenly">
                    <button class="btn btn-sm btn-success px-4">Login</button>
                    <a href="{{ route('register') }}" class="btn btn-sm btn-warning  px-4" >Go to Register</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
