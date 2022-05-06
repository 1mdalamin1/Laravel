<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['group_id', 'name', 'phone', 'email', 'address'];  // protected $guarded = [];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function sales()
    {
    	return $this->hasMany(SaleInvoice::class);
    }

    // Sales Items of a User
    public function saleItems()
    {
        return $this->hasManyThrough(SaleItem::class, SaleInvoice::class);
    }


    public function purchases()
    {
    	return $this->hasMany(PurchaseInvoice::class);
    }

    // Sales Items of a User
    public function purchaseItems()
    {
        return $this->hasManyThrough(PurchaseItem::class, PurchaseInvoice::class);
    }

    public function payments()
    {
        return $this->hasMany(Payments::class);
    }


    public function receipts()
    {
        return $this->hasMany(Receipts::class);
    }

}
