@extends('layouts.main')

@section('main_content')

<h2>Welcome to Home Page</h2>

<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3> {{ $totalStock }} </h3>

          <p>Total Stock</p>
        </div>
        <div class="icon">
          <i class="fa fa-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3> {{ $totalUsers }} </h3>

          <p>Total Users</p>
        </div>
        <div class="icon">
          <i class="fa fa-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>
            {{ $totalProducts }} <sup style="font-size: 20px">৳</sup></h3>

          <p>Total Products</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $totalSales }}</h3>

          <p>Total Salse</p>
        </div>
        <div class="icon">
          <i class="fa fa-home"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3> {{ $totalPurchases }} </h3>

          <p>Total Purchses</p>
        </div>
        <div class="icon">
          <i class="fa fa-dollar-sign"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3> {{ $totalReceipts }} </h3>

          <p>Total Recepits</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3> {{ $totalPayments }} </h3>

            <p>Total Payments</p>
          </div>
          <div class="icon">
            <i class="fa fa-dollar-sign"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
      <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3> {{ $totalReceipts - $totalPayments }} </h3>

            <p>Cash in Hand</p>
          </div>
          <div class="icon">
            <i class="fa fa-dollar-sign"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
      <!-- ./col -->
  </div>

@endsection
