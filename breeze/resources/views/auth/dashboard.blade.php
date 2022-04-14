@extends('layout.app')
@section('title', 'User Dashboard')

@section('main_content')
    <div class="container mt-5">
        <h2>Hi, {{ auth()->user()->name ?? 'Null' }}</h2>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"></button>
        </form>
    </div>
@endsection



