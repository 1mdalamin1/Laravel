<?php

namespace App\Models;

use App\Scope\StudentScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // protected $table = 'students';
    # Alternative
    protected $guarded = []; // auto matic all table name protected

    protected static function booted()
    {
        static::addGlobalScope(new StudentScope);
    }

}
