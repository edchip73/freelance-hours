<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::find(1);
        //return view('welcome');
        /*$user = User::query()->create([
            'name'=> 'Carlos Eduardo',
            'email'=> 'edchip73@gmail.com',
            'password'=> 'ed173073',
        ]);*/


        dd($user->email_verified_at);
    }
}
