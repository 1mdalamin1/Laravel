<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Models\Payments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserPaymentsController extends Controller
{
    public function __construct()
	{
        parent::__construct();
		$this->data['tab_menu'] = 'payments';
	}
    /**
     * Show all payments of a users
     * @param  User $id
     */
    public function index( $id )
    {
    	$this->data['user'] 	= User::findOrFail($id);

    	return view('users.payments.payments', $this->data);
    }

    /**
     * Add new Payment
     * @param  PaymentRequest 	$request
     * @param  int         		$user_id
     */
    public function store(PaymentRequest $request, $user_id, $invoice_id = null)
    {
    	$formData 				= $request->all();
    	$formData['user_id'] 	= $user_id;
        $formData['admin_id']   = Auth::id();
        if ($invoice_id) {
            $formData['purchase_invoice_id']   = $invoice_id;
        }

    	if( Payments::create($formData) ) {
            Session::flash('message', 'Payment Added Successfully');
        }

        if ($invoice_id) {
            return redirect()->route( 'user.purchases.invoice_details', ['id' => $user_id, 'invoice_id' => $invoice_id] );
        } else {
            return redirect()->route('users.show', ['user' => $user_id]);
        }

    }

    /**
     * Delete a payment
     * @param  int $user_id
     * @param  int $payment_id
     */
    public function destroy($user_id, $payment_id)
    {
    	if( Payments::destroy($payment_id) ) {
            Session::flash('message', 'Payment Deleted Successfully');
        }

        return redirect()->route('users.payments', ['id' => $user_id]);
    }

}