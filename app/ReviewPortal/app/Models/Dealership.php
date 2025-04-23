<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Dealership extends Model
{
    use HasFactory;

    // Define the table name explicitly
    protected $table = 'dealerships';

    // Define the field
    protected $fillable = [
        'name',
        'city',
        'address',
        'zip_code',
        'state',
    ];
    public $timestamps = false;
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

}
