<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    
    public function registerForm()
    {
        return view('registration.register');
    }

    public function registerUser(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required||unique:users,email',
            'role' => 'required',
            'password' => 'required|min:6|',
            'password-confirm' => 'required|same:password',
        ]);
        
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'role' => request('role'),
            'password' => bcrypt($request['password']),
        ]);
        
        auth()->login($user);
        
        return redirect()->to('/');
    }
}
