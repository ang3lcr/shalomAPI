<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

                         //CHATGPT           
class User extends Model implements AuthenticatableContract
{
    use HasFactory;
    use HasApiTokens;


    //chatgpt
    use Authenticatable;


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
