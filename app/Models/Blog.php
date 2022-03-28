<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'title', 'excerpt', 'body'];


    // protected function slug() : Attribute
    // {
    //     return Attribute::make(
    //         set: fn ($value, $attributes) => str($attributes['title'])->slug(),
    //     );
    // }

}
