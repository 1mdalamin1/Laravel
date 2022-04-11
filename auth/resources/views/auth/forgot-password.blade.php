@extends('layout.app')
@section('title', 'User forgetPassword')

@section('main_content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h3 class="text-center m-4">User forgetPassword</h3>
            @if(session('status'))
                <span class="text-success">{{ session('status') }}</span>
            @endisset
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="form-group">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="email" name="email" placeholder="Enter your email" class="form-control">
                </div>

                <div class="my-4 form-group d-flex justify-content-evenly">
                    <button class="btn btn-sm btn-success px-4">ForgetPassword</button>

                    <a href="{{ route('login') }}" class="btn btn-sm btn-info px-4" >Go to Login</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
