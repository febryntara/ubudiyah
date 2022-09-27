<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'username' => 'required',
            'password' => 'required',
        ]);
 
        $validatedData['password'] = Hash::make($validatedData['password']);
        Login::create($request->all());
        // Login::insert([
        //     'username' => 'test',
        //     'password' => '1234',
        //     'nama_lengkap' => 'nma'
        // ]);
        // return redirect('/admin')->with('success', 'Registration Succesfull! Please Login');
    }
}
