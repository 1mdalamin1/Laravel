@extends('layouts.main')

@section('main_content')

<!-- Start card -->

<div class="card" style="width: 100%;">
    <div class="card-header">
        <div class="row clearfix">
            <div class="col-md-6">
                <h2>Welcome to groups Pages</h2>
                <h3 class="card-title">DataTable with default features</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ url('groups/create')}}" class="btn btn-info">Add Group <i class="fa fa-plus nav-icon"></i></a>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    {{-- {{ $groups }} --}}
      <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th class="text-right">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($groups as $group)
              <tr>
                <td> {{ $group->id }} </td>
                <td> {{ $group->title }} </td>
                <td class="text-right">
                    <form method="POST" action=" {{ url('groups/' . $group->id) }} ">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </button>
                    </form>
                </td>
              </tr>
          @endforeach
        </tbody>
        <tfoot>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th class="text-right">Actions</th>
            </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection
