<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);

Route::post('blog',function(){
    return response()->json([
            'data'=>[
                 [
                    'title'=>'Build Cross-Language Multi-Agent Team with Google’s Agent Development Kit and A2A',
                'description'=>'The fix is the same pattern that transformed backend engineering a decade ago: decompose the monolith into specialized microservices. Each agent gets one job, a focused prompt, and a minimal toolset.',
                'date'=> '17/06/2026'
                 ],
                 [
                    'title'=>' Agent Development Kit and A2A',
                'description'=>'backend engineering a decade ago: decompose the monolith into specialized microservices. Each agent gets one job, a focused prompt, and a minimal toolset.',
                'date'=> '18/06/2026'
                 ]
            ]
    ],200);
});