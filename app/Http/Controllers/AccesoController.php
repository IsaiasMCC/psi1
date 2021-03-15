<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AccesoController extends Controller
{
    public function login(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'email' => ['required', 'string', 'email'],
            'password' => ['required'],
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()->first('email')]);
        }

        $credentials=request(['email','password']);

        if(!Auth::attempt($credentials)){
            return response()->json(['error'=>'datos invalidos']);
        }

        $user=User::where('email',$request->email)->first();
        $tokenResult=$user->createToken('authToken')->plainTextToken;
        return response()->json(['token'=>$tokenResult,
            'email'=>Auth::user()->email,
            'error'=>null,
            'id'=>$user->id,
            'verification'=>Auth::user()->email_verified_at]);
    }
}
