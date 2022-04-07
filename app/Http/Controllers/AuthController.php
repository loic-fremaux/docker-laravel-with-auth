<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $user = User::where('name', $request->post('name'))->orWhere('email', $request->post('name'))->first();
        if ($user === null) {
            return redirect()->route('auth.login')->withErrors(['login_result' => "Invalid credentials."]);
        }

        if (!\Hash::check($request->post('password'), $user->password)) {
            return redirect()->route('auth.login')->withErrors(['login_result' => "Invalid credentials."]);
        }

        \Auth::login($user, true);

        return redirect()->route('home');
    }

    public function register(Request $request)
    {
        $args = User::validator($request->all())->validate();

        User::create([
            'name' => $args['name'],
            'email' => $args['email'],
            'password' => \Hash::make($args['password'])
        ]);

        return redirect()->route('home');
    }

    public function logout()
    {
        \Auth::logout();
        return redirect()->route('auth.login');
    }


}
