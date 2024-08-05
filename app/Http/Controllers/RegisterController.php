<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            "active" => 'register',
        ]);
    }
    public function store(Request $request)
    {
       $validatedData=$request->validate([
        'name' => 'required|max:50',
        'username' => ['required','min:3','max:50','unique:users'],
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:5|max:20'
       ]);
        $validatedData['password']=Hash::make($validatedData['password']);
       User::create($validatedData);
       return redirect('/login')->with('success', 'Sukses Register Login');
    }
}
