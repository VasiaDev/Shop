<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

Route::post('/register', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users,email',
        'password' => 'required|string|min:6|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    Auth::login($user);

    $token = $user->createToken('api-token')->plainTextToken;

    return response()->json([
        'token' => $token,
        'user' => $user,
    ], 201);
});

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['Неверные учетные данные.'],
        ]);
    }

    Auth::login($user);

    $user->tokens()->delete();
    $token = $user->createToken('api-token')->plainTextToken;

    return response()->json([
        'token' => $token,
        'user' => $user,
    ]);
});


Route::middleware(['auth:sanctum', 'throttle:60,1'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});

Route::middleware(['throttle:60,1'])->group(function () {
    Route::post('/products', \App\Http\Controllers\API\Product\IndexController::class);
    Route::get('/products/all', \App\Http\Controllers\API\Product\AllProductsController::class);
    Route::post('/orders', \App\Http\Controllers\API\Order\StoreController::class);
    Route::get('/products/filters', \App\Http\Controllers\API\Product\FilterListController::class);
    Route::get('/products/{product}', \App\Http\Controllers\API\Product\ShowController::class);
});


