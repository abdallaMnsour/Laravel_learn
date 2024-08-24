<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class, 'product_users', 'product_id', 'user_id', 'id', 'id');
    }

    public function one_product()
    {
        return $this->morphOne(AllImage::class, 'imageable');
    }

    public function all_images()
    {
        return $this->morphMany(AllImage::class, 'imageable');
    }
}
