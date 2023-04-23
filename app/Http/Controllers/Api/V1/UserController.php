<?php

namespace App\Http\Controllers\Api\V1;


use App\Models\User;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserResource;
use App\Http\Requests\V1\StoreUserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    } 

    //CREATE USER
    public function store(StoreUserRequest $request)
    {

        $user = new User();
        $user -> username = $request -> input('username');
        $user -> email = $request -> input('email');
        $user -> password = Hash::make($request -> input('password'));
        $user -> address = $request -> input('address');
        $user -> phone = $request -> input('phone');
        $user -> save();

        $token = $user -> createToken('auth_token') -> plainTextToken;

        return response() -> json([
            'message'=> 'User created succesfully',
            'user'=> $user,
            'access_token' => $token,
            'token_type' => 'Bearer'
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    public function login(Request $request) {
        if (!Auth::attempt($request -> only('email', 'password'))) {
            return response() -> json([
                'message'=> "Invalid data",
            ], 401);
        } else {
            $user = User::where('email', $request -> input('email')) -> firstOrFail();
            $token = $user->createToken('auth_token') -> plainTextToken;

            return response() -> json([
                'message' => 'Hola '. $user -> username,
                'accessToken' => $token,
                'token_type' => 'Bearer', 
                'user' => $user,
            ], 200);
        }
        
    }



    public function logout() {
        auth() -> user() -> tokens() -> delete();

        return [
            'message' => 'Haz cerrado sesion satisfactoriamente'
        ];
    }

}
