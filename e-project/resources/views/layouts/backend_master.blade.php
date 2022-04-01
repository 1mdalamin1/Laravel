@extends('layouts.backend_app')

@section('app_content')

@includeIf('inc.backend.sidebar')

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
       @include('inc.backend.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            @yield('master_content')

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    @include('inc.backend.footer')
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

@stop
