@extends('users.user_layout')

@section('user_content')

<div class="card-header">
    <h2>Show <b> {{ $user->name }} </b> info.</h2>
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

@endsection
