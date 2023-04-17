<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    use HasFactory;



    protected $fillable = [
        'username',
        'email',
        'password',
        'address',
        'phone'
    ];




    public function orders() {
        return $this->hasMany(Order::class);
    }
    public function carts() {
        return $this->hasOne(Cart::class);
    }


}
