<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function showForm()
    {
        return view('register');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        
        return redirect()->route('register.success')->with('userData', $validated);
    }

   
    public function successPage()
    {
        $userData = session('userData'); 
        return view('success', compact('userData'));
    }
}

