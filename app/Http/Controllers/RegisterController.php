<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Braintree;

class RegisterController extends Controller
{
    public function register(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' =>['required', 'min:6', 'confirmed']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

     
        $response = Braintree\Customer::create([
           'firstName' => $request->name,
           'lastName' => 'Jones',
        ]);
        
        // save your braintree customer id
        if( $response->success) {
            $user->braintree_user_id = $response->customer->id;
            $user->save();
        }
    }
}
