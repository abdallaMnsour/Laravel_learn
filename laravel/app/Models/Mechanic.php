<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function car()
    {
        return $this->hasMany(Car::class);
    }

    // public function user_car()
    // {
    //     return $this->hasOneThrough(User::class, Car::class, 'mechanic_id', 'car_id', 'id', 'id');
    // }

    public function user_car()
    {
        return $this->hasManyThrough(User::class, Car::class, 'mechanic_id', 'car_id', 'id', 'id');
    }
}
