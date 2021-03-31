<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    use HasFactory;

    protected $fillable = [
        'customer','review','star'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
