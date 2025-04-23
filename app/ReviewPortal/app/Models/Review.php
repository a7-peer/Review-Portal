<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Define the table name (optional, Laravel assumes it's pluralized form)
    protected $table = 'reviews';
    protected $casts = [
        'purchase_date' => 'date',
    ];

    // Define the fields that are mass assignable
    protected $fillable = [
        'dealership_id',
        'user_id',
        'car_make_id',
        'car_year',
        'purchase_date',
        'review_text',
    ];
    public $timestamps = false;
    // Define the relationship with the Dealership model (One-to-Many)
    //Each review belongs to a dealership and belongs to a user.
    public function dealership()
    {
        return $this->belongsTo(Dealership::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }




}
