<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 
        'car_name', 
        'car_url', 
        'car_image', 
        'banner_image',
        'alt_text', 
        'feature1', 
        'feature2',
        'feature3',
        'description',
    ];
}
