@extends('layouts.main')

@section('main_content')
<h2>Datails for {{ $user->name }}</h2>
<!-- Start card -->

<div class="card">
    <div class="card-header">
        <div class="row clearfix">
            <div class="col-md-3">
                <a href="{{ route('users.index') }}" class="btn btn-warning"><i class="fa fa-arrow-left nav-icon"></i> Go back userList</a>
            </div>
            <div class="col-md-9 text-right">
                <a href="{{ url('users/create') }}" class="btn btn-info">Add user <i class="fa fa-plus nav-icon"></i></a>
                <a href="{{ url('users/create') }}" class="btn btn-info">New Sale <i class="fa fa-plus nav-icon"></i></a>
                <a href="{{ url('users/create') }}" class="btn btn-info">New Purchase <i class="fa fa-plus nav-icon"></i></a>
                <a href="{{ url('users/create') }}" class="btn btn-info">New Payment <i class="fa fa-plus nav-icon"></i></a>
                <a href="{{ url('users/create') }}" class="btn btn-info">New Receipt <i class="fa fa-plus nav-icon"></i></a>
            </div>
        </div>
    </div>
    <!-- /.card-header -->

    <div class="card-body">
        <div class="row clearfix justify-content-md-center">
            <div class="col-md-8">
                <table class="table table-borderless table-striped">
                  <tr>
                      <th class="text-right">Group :</th>
                      <td> {{ $user->group->title }} </td>
                  </tr>
                  <tr>
                      <th class="text-right">Name : </th>
                      <td> {{ $user->name }} </td>
                  </tr>
                  <tr>
                      <th class="text-right">Eamil : </th>
                      <td> {{ $user->email }} </td>
                  </tr>
                  <tr>
                      <th class="text-right">Phone : </th>
                      <td> {{ $user->phone }} </td>
                  </tr>
                  <tr>
                      <th class="text-right">Address : </th>
                      <td> {{ $user->address }} </td>
                  </tr>
                 </table>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection
