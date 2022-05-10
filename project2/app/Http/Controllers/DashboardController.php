<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use App\Models\Product;
use App\Models\PurchaseItems;
use App\Models\Receipts;
use App\Models\SaleItems;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller

{

	public function __construct()
    {
        parent::__construct();
        $this->data['main_manu']    = 'Dashboard';
    }


    public function index()
    {
    	$this->data['totalUsers'] 		= User::count('id');
    	$this->data['totalProducts'] 	= Product::count('id');
    	$this->data['totalSales'] 		= SaleItems::sum('total');
    	$this->data['totalPurchases'] 	= PurchaseItems::sum('total');
    	$this->data['totalReceipts'] 	= Receipts::sum('amount');
    	$this->data['totalPayments'] 	= Payments::sum('amount');
    	$this->data['totalStock'] 		= PurchaseItems::sum('quantity') - SaleItems::sum('quantity');

        return view('dashboard', $this->data);
    }
}
