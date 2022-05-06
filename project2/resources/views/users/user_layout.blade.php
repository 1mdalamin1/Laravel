@extends('layouts.main')

@section('main_content')

<!-- Start card -->
<div class="container-fluid my-4">
    <div class="row clearfix">
        <div class="col-md-3">
            <a href="{{ route('users.index') }}" class="btn btn-warning"><i class="fa fa-arrow-left nav-icon"></i> Go back userList</a>
        </div>
        <div class="col-md-9 text-right">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#newSale">
                <i class="fa fa-plus"></i> Sale
              </button>

              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#newPayment">
                <i class="fa fa-plus"></i> Payment
              </button>

              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#newPurchase">
                <i class="fa fa-plus"></i> Purchase
              </button>

              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#newReceipt">
                <i class="fa fa-plus"></i> Receipt
              </button>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">

            <a href="{{ route('users.show', $user->id) }}" class="btn @if($tab_menu == 'user_info') btn-success @else btn-dark @endif  d-block mb-2 btn-sm">User Info</a>
            <a href="{{ route('user.sales', $user->id) }}" class="btn @if($tab_menu == 'sales') btn-success @else btn-dark @endif d-block mb-2 btn-sm"><i class="fa fa-money" aria-hidden="true"></i> Sales</a>
            <a href="{{ route('users.purchases', $user->id) }}" class="btn @if($tab_menu == 'purchases') btn-success @else btn-dark @endif d-block mb-2 btn-sm">Purchase</a>
            <a href="{{ route('users.payments', $user->id) }}" class="btn @if($tab_menu == 'payments') btn-success @else btn-dark @endif d-block mb-2 btn-sm"><i class="fa fa-cc-paypal" aria-hidden="true"></i> Payments</a>
            <a href="{{ route('users.receipt', $user->id) }}" class="btn @if($tab_menu == 'receipts') btn-success @else btn-dark @endif d-block  btn-sm"><i class="fa fa-receipt"></i>Receipt</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">


            <div class="card">
                @yield('user_content')
                <!-- /.card-body -->
            </div>


        </div>
    </div>
</div>

  <!-- /.card -->
@endsection
