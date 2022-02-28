<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index () {
        return view('auth.register', [
            'title' => 'register',
            'isActive' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'user_name' => ['required', 'min:2', 'max:50', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:100',
        ]);
        // $validated["password"] = bcrypt($validated["password"]);
        $validated["password"] = Hash::make($validated["password"]);
        User::create($validated);

        // $request->session()->flash('registered', 'registrasi berhasil, silahkan login');
        // redirect
        return redirect('/login')->with('registered', 'registrasi berhasil, silahkan login');
        
    }
}
