@extends('layout.app')
@section('title', 'User forgetPassword')

@section('main_content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h3 class="text-center m-4">User enter new Password</h3>
            @if(session('status'))
                <span class="text-success">{{ session('status') }}</span>
            @endisset
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name='token' value="{{ request()->route('token') }}">
                <div class="form-group">

                    <label for="">Email</label>
                    <input type="email" name="email" value="{{ old('email', request()->email) }}" class="form-control" readonly>
                </div>
                <div class="row  my-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" placeholder="password" class="form-control">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="">password Confirm</label>
                            <input type="password" name="password_confirmation" placeholder="password Confirm" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="my-4 form-group d-flex justify-content-evenly">
                    <button class="btn btn-sm btn-success px-4">Update Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
