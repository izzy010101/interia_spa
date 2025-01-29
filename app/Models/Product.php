<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    // Define the table if it's not the default 'products'
    protected $table = 'products';

    // Specify the fields that can be mass-assigned
    protected $fillable = ['name', 'description', 'price', 'created_at', 'updated_at'];

    // Define the type of the price field and created_at field if necessary
    protected $casts = [
        'price' => 'decimal:2',
        'created_at' => 'datetime',  // Make sure 'created_at' is treated as a datetime
    ];
}
