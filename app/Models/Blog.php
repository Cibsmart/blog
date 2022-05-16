<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['author_id', 'slug', 'title', 'excerpt', 'body'];


    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }


    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
