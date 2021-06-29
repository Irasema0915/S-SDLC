<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
     public function registro(Request $request){
        // o se puede usar con $user = new \App\User();
        $user = new \App\Models\User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        if($user->save()){
            return response()->json($user,201);
        }
        return response()->json(null,204);
    }

    public function login(Request $request){
        return response()->json(\App\Models\User::all(),200);

    }


}