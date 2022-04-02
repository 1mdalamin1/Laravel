<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'name', 'rate', 'type'
    // ];
    # Alternative
    protected $guarded = []; // auto matic all table name protected

    // protected $hidden = []; // for table colum hidden

}
