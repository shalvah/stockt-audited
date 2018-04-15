<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public const CATEGORIES = [
        'Phones and Electronics',
        'Fashion',
        'Furniture',
        'Groceries'
    ];

    protected $guarded = [];
}
