<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('login.login');
    }

    /*public function login()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }

        
        return redirect()->to('/index');
    }*/
    public function login(Request $request)
    {
        //dd(request()->all());
        $validator = Validator::make(request()->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|max:255|min:6',
        ]);
        if ($validator->passes()) {
            $email = $request->get('email');
            $password = $request->get('password');

            if (Auth::attempt(array('email' => $email, 'password' => $password))) {
                if (Auth::user()->role == 'customer') {
                    return redirect('/index');
                }else{
                    if (Auth::user()->role == 'vendor') {
                    return redirect('/index');
                }              
            }
        }
            else {
                return redirect('/login')->with('error','Please provide the valid credentials');
            }
        } else {
            // dd($validator);
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/');
    }
}
