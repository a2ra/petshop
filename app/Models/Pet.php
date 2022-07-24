<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public $timestamps=false;
    use HasFactory;
    protected $fillable=[
        
            'name',
            'year',
            'breed',
            'price',
    ];
}
