<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 7;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'car_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // protected function Email(): Attribute
    // {
    //     // return Attribute::make(get: fn ($value) => Str::upper($value));
    //     // return Attribute::get(fn ($value) => Str::upper($value) . 'hello');
    //     return Attribute::set(fn ($value) => Str::upper($value));
    // }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function products()
    {
        return $this
            ->belongsToMany(Product::class, 'product_users', 'user_id', 'product_id', 'id', 'id')
            ->as('hello')
            ->withTimestamps();
    }

    public function cars()
    {
        // return $this->();
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }

    public function one_image()
    {
        return $this->morphOne(AllImage::class, 'imageable');
    }

    public function all_images()
    {
        return $this->morphMany(AllImage::class, 'imageable');
        // return $this->morphToMany(AllImage::class, 'imageable', 'all_images', 'id', 'imageable_id', 'imageable_type');
    }

    public function by_many_images()
    {
        return $this->morphedByMany(AllImage::class, 'imageable',);
    }

    /**
     * belongsTo()
     * hasOne()
     * hasMany()
     * belongsToMany()
     * hasOneThrough()
     * hasManyThrough()
     * morphTo()
     * morphOne()
     * morphMany()
     * morphedByMany()
     * morphToMany() i don't know
     */
}
