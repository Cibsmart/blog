<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->belongsToMany(Blog::class);
    }

    public function getColorClassesAttribute() 
    {
        $colors = [
            'green' => 'bg-green-100 text-green-800',
            'yellow' => 'bg-yellow-100 text-yellow-800',
            'red' => 'bg-red-100 text-red-800',
            'blue' => 'bg-blue-100 text-blue-800',
        ];

        return $colors[$this->color] ?? 'bg-gray-100 text-gray-800';
    }

    // public function colorClasses() : Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => [
    //                 'green' => 'bg-green-100 text-green-800',
    //                 'yellow' => 'bg-yellow-100 text-yellow-800',
    //                 'red' => 'bg-red-100 text-red-800',
    //                 'blue' => 'bg-blue-100 text-blue-800',
    //             ][$value] ?? 'bg-gray-100 text-gray-800'
    //     );
    // }
}
