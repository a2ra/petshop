<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public $timestamps=false;
    use HasFactory;
    protected $fillable=[
        'code',
        'year',
        'pets',
        'customer',
        'price',
    ];
}
