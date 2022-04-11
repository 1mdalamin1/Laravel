@extends('layout.app')
@section('title', 'User Dashboard')

@section('main_content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <h2>Dashboard Page</h2>
        <h2>Hi, {{ auth()->user()->name ?? 'NULL' }}</h2>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button >Logout</button>
        </form>
    </div>
</div>
@endsection
