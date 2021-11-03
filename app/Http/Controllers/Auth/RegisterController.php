<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Auth.register', ["title" => "Register"]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "nama" => "required|max:50|min:3",
            "nip" => "required|numeric|digits:18",
            "password" => "required|min:8|max:50",
        ]);
        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);
        return redirect("/login");
    }
}
