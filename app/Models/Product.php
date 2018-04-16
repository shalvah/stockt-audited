<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Product extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public const CATEGORIES = [
        'Phones and Electronics',
        'Fashion',
        'Furniture',
        'Groceries'
    ];

    protected $guarded = [];

}
