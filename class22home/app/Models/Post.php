<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    # Mutators 
    function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    # Accessor
    function getNameAttribute($value)
    {
        return strtolower($value);
    }
}
