<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get("/setup", function () {
//     $credentials = [
//         'email' => 'admin@admin.com',
//         'password' => 'password'
//     ];

//     if (Auth::attempt($credentials)) {
//         $user = new \App\Models\User();

//         $user->name = 'Admin';
//         $user->email = $credentials['email'];
//         $user->password = Hash::make($credentials['password']);

//         $user->save();

//         if (Auth::attempt($credentials)) {
//             $user = Auth::user();
//             $adminToken = $user->createToken('admin-token', ['create', 'update', 'delete']);
//             $updateToken = $user->createToken('update-token', ['create', 'update']);
//             // readonly
//             $baseToken = $user->createToken('base-token');

//             return response()->json([
//                 'admin' => $adminToken->plainTextToken,
//                 'update' => $updateToken->plainTextToken,
//                 'base' => $baseToken->plainTextToken
//             ]);
//         }
//     }
// });
