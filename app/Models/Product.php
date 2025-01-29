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
    protected $fillable = ['id', 'name', 'description', 'price', 'created_at', 'updated_at'];


}
