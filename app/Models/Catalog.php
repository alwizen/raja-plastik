<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
     protected $fillable = [
        'name_item',
        'price',
        'category',
        'pcs_item',
    ];
}
