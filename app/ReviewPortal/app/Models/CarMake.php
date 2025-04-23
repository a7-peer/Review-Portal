<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarMake extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Define the one-to-many relationship with reviews
    public function reviews()
    {
        return $this->hasMany(Review::class, 'car_make_id');
    }
    public function carMake()
    {
        return $this->belongsTo(CarMake::class, 'car_make_id');
    }
}
