<?php

namespace App\Http\Controllers\Api\V1;


use App\Models\User;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserResource;
use App\Http\Requests\V1\StoreUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    } 

  
    public function store(StoreUserRequest $request)
    {

        $user = new User();
        $user -> username = $request -> input('username');
        $user -> email = $request -> input('email');
        $user -> password = Hash::make($request -> input('password'));
        $user -> address = $request -> input('address');
        $user -> phone = $request -> input('phone');
        $user -> save();

        return response() -> json([
            'message'=> 'User created succesfully',
            'user'=> $user
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

}
