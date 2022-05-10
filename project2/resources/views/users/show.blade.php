@extends('users.user_layout')

@section('user_content')

<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>@php
              $total = 0;
              foreach ($user->sales as $key => $sale) {
                  $total += $sale->items()->sum('total');
              }
              $totalSales = $total;
              echo $total;
          @endphp</h3>

          <p>Total Sales</p>
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
            @php

            $totalPurchase = 0;
            foreach ($user->purchases as $purchase) {
              $totalPurchase += $purchase->items()->sum('total');
            }
            echo $totalPurchase;
            @endphp

              <sup style="font-size: 20px">৳</sup></h3>

          <p>Total Purchases</p>
        </div>
        <div class="icon">
          <i class="fa fa-man"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $user->receipts()->sum('amount') }}</h3>
@php
    $totalRecept = $user->receipts()->sum('amount');
@endphp
          <p>Total Receipts</p>
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
          <h3>{{ $user->payments()->sum('amount') }}</h3>
@php
    $totalPayment = $user->payments()->sum('amount');
@endphp
          <p>Total Payments</p>
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
          <h3>
            @php
                 $totalBalance = ($totalPurchase + $totalRecept) - ($totalSales + $totalPayment);
            @endphp
          </h3>

          <p>Total Balance</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>



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
