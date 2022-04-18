<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    function getRouteKeyName()
    {
        return 'slug';
    }
    // public function slug(): Attribute
    // {
    //     return new Attribute(
    //         get: fn ($value) => ($value),
    //         set: fn ($value) => Str::slug($value),
    //     );
    // }
}
