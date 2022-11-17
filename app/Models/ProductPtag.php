<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPtag extends Model
{
    use HasFactory;

    protected $table = 'product_ptags';
    protected $guarded = false;
}
