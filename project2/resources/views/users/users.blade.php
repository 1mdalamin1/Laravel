@extends('layouts.main')

@section('main_content')
<h2>Welcome to users Pages</h2>
<!-- Start card -->

<div class="card">
    <div class="card-header">
        <div class="row clearfix">
            <div class="col-md-6">

                <h3 class="card-title">Look all users</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ url('users/create')}}" class="btn btn-info">Add user <i class="fa fa-plus nav-icon"></i></a>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    {{-- {{ $users }} --}}
      <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>Group</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th class="text-right">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
              <tr>
                <td> {{ $user->id }} </td>
                <td> {{ $user->group_id }} ) {{ $user->group->title }}
                    {{-- @if ($user->group_id == 4)
                    {{ 'Admin' }}

                @endif  --}}
                </td>
                <td> {{ $user->name }} </td>
                <td> {{ $user->email }} </td>
                <td> {{ $user->phone }} </td>
                <td> {{ $user->address }} </td>
                <td class="text-right d-flex">
                    <a href="{{ route('users.show', ['user'=> $user->id]) }}" class="btn btn-success mr-1  btn-sm"><i class="fa fa-eye"></i></a>
                    <a href="{{ route('users.edit', ['user'=> $user->id]) }}" class="btn btn-info mr-1  btn-sm"><i class="fa fa-pen"></i></a>
                    <form method="POST" action=" {{ route('users.destroy',  ['user' => $user->id]) }} ">
                        @if (
                            $user->sales()->count() == 0
                            && $user->purchases()->count() == 0
                            && $user->receipts()->count() == 0
                            && $user->payments()->count() == 0
                            )

                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </button>

                        @endif
                    </form>
                </td>
              </tr>
          @endforeach
        </tbody>
        <tfoot>
            <tr>
              <th>ID</th>
              <th>Group</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th class="text-right">Actions</th>
            </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection
