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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">

                    <a href="{{ route('users.show', $user->id) }}"
                        class="btn @if($tab_menu == 'user_info') btn-success @else btn-dark @endif  d-block mb-2 btn-sm">User
                        Info</a>
                    <a href="{{ route('user.sales', $user->id) }}"
                        class="btn @if($tab_menu == 'sales') btn-success @else btn-dark @endif d-block mb-2 btn-sm"><i
                            class="fa fa-money" aria-hidden="true"></i> Sales</a>
                    <a href="{{ route('users.purchases', $user->id) }}"
                        class="btn @if($tab_menu == 'purchases') btn-success @else btn-dark @endif d-block mb-2 btn-sm">Purchase</a>
                    <a href="{{ route('users.payments', $user->id) }}"
                        class="btn @if($tab_menu == 'payments') btn-success @else btn-dark @endif d-block mb-2 btn-sm"><i
                            class="fa fa-cc-paypal" aria-hidden="true"></i> Payments</a>
                    <a href="{{ route('users.receipt', $user->id) }}"
                        class="btn @if($tab_menu == 'receipts') btn-success @else btn-dark @endif d-block  btn-sm"><i
                            class="fa fa-receipt"></i>Receipt</a>
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

{{-- Modal For add new payment --}}
<div class="modal fade" id="newPayment" tabindex="-1" role="dialog" aria-labelledby="newPaymentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        {!! Form::open([ 'route' => ['user.payments.store', $user->id], 'method' => 'post' ]) !!}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newPaymentModalLabel"> New Payments </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="date" class="col-sm-3 col-form-label"> Date <span class="text-danger">*</span> </label>
                    <div class="col-sm-9">
                        {{ Form::date('date', NULL, [ 'class'=>'form-control', 'id' => 'date', 'placeholder' => 'Date', 'required' ]) }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="amount" class="col-sm-3 col-form-label">Amount <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        {{ Form::text('amount', NULL, [ 'class'=>'form-control', 'id' => 'amount', 'placeholder' => 'Amount', 'required' ]) }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="note" class="col-sm-3 col-form-label">Note </label>
                    <div class="col-sm-9">
                        {{ Form::textarea('note', NULL, [ 'class'=>'form-control', 'id' => 'note', 'rows' => '3', 'placeholder' => 'Note' ]) }}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>



{{-- Modal For add new Receipts --}}
<div class="modal fade" id="newReceipt" tabindex="-1" role="dialog" aria-labelledby="newreceiptModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        {!! Form::open([ 'route' => ['user.receipts.store', $user->id], 'method' => 'post' ]) !!}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newreceiptModalLabel"> New receipts </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="date" class="col-sm-3 col-form-label"> Date <span class="text-danger">*</span> </label>
                    <div class="col-sm-9">
                        {{ Form::date('date', NULL, [ 'class'=>'form-control', 'id' => 'date', 'placeholder' => 'Date', 'required' ]) }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="amount" class="col-sm-3 col-form-label">Amount <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        {{ Form::text('amount', NULL, [ 'class'=>'form-control', 'id' => 'amount', 'placeholder' => 'Amount', 'required' ]) }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="note" class="col-sm-3 col-form-label">Note </label>
                    <div class="col-sm-9">
                        {{ Form::textarea('note', NULL, [ 'class'=>'form-control', 'id' => 'note', 'rows' => '3', 'placeholder' => 'Note' ]) }}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>

{{-- Modal For add new Sale --}}
<div class="modal fade" id="newSale" tabindex="-1" role="dialog" aria-labelledby="newSaleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        {!! Form::open([ 'route' => ['user.receipts.store', $user->id], 'method' => 'post' ]) !!}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSaleModalLabel"> New Sale Invoice </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="date" class="col-sm-3 col-form-label"> Date <span class="text-danger">*</span> </label>
                    <div class="col-sm-9">
                        {{ Form::date('date', NULL, [ 'class'=>'form-control', 'id' => 'date', 'placeholder' => 'Date', 'required' ]) }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="amount" class="col-sm-3 col-form-label">Amount <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        {{ Form::text('amount', NULL, [ 'class'=>'form-control', 'id' => 'amount', 'placeholder' => 'Amount', 'required' ]) }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="note" class="col-sm-3 col-form-label">Note </label>
                    <div class="col-sm-9">
                        {{ Form::textarea('note', NULL, [ 'class'=>'form-control', 'id' => 'note', 'rows' => '3', 'placeholder' => 'Note' ]) }}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection
