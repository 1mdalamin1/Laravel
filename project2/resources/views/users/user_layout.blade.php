@extends('layouts.main')

@section('main_content')

<!-- Start card -->
<div class="container-fluid my-4">
    <div class="row clearfix">
        <div class="col-md-3">
            <a href="{{ route('users.index') }}" class="btn btn-warning"><i class="fa fa-arrow-left nav-icon"></i> Go
                back userList</a>
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

@include('users.user_layout_content')

@endsection
