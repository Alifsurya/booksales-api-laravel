<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

class AuthController extends Controller
{
    public function register(Request $request) {
        // 1. Setup validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8'
        ]);

        //2. cek validator
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        //3. create users
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        //4. cek status berhasil
        if ($user) {
            return response()->json([
                'success' =>true,
                'message' => 'User created succesfully',
                'data' => $user
            ], 201);
        }

        // 5. cek gagal
        return response()->json([
            'success' => false,
            'message' => 'User creation faild'
        ], 409); //conflict

    }

    public function login(Request $request) {
        //1. Validator
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]); 

        //2. cek validator
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //3. get kredensial dari request
        $credentials = $request->only('email', 'password');

        //4. Cek isFailed
        if (!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Email atau Password anda salah!'
            ], 401);
        }

        //5.Cek isSuccess
        return response()->json([
            'success' => true,
            'message' => 'Login succesfully',
            'user' => auth()->guard('api')->user(),
            'token' => $token,
        ], 200);
    }

    public function logout (Request $request) {
        // try
        // 1. Invalidate token
        // 2. cek isSuccess

        //catch
        //1. cek isFailed
        try {
            JWTAuth::invalidate(JWTAuth::getToken());

            return response()->json([
                'success' => true,
                'message' => 'Logout succesfully!'
            ], 200);

        } catch (JWTException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Logout failed'
            ], 500);
        }
    }

}
