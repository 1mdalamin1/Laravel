@extends('layout.app')
@section('title', 'User verify')

@section('main_content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <h1>Hi, <b><i> {{ auth()->user()->name ?? 'NULL' }}</i></b></h1>

        <h2>Verification Notice</h2>
        <p>Fist you have to verify your email then you can access this app</p>

        <form action="{{ route('verification.send') }}" method="POST">
            @csrf
            <button class="btn btn-sm btn-warning  px-4 my-4 ">Resending Verification Email</button>
        </form>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button >Logout</button>
        </form>
    </div>
</div>
@endsection



