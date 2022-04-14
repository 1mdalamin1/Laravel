<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <span>Hi, {{ auth()->user()->name ?? 'Null' }}</span> You're logged in!
                </div>
                <div class="container mt-5">
                    @can('isAdmin')
                        <h2>Admin Portion</h2>
                    @endcan

                    @can('isVisitor')
                        <h2>Visitor Portion</h2>
                    @endcan

                    @can('isEditor')
                        <h2>Editor Portion</h2>
                    @endcan
<hr>
@if ( Gate::check('isAdmin') || Gate::check('isEditor') )
    <a href="{{ route('post.create') }}" class="btn btn-success btn-sm" >Post Create</a>
@endif

<hr>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-danger p-3" type="submit">Logout</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
