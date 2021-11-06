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
      "password" => "required|confirmed|min:8|max:50",
    ]);
    $validateData['password'] = Hash::make($validateData['password']);
    try {
      User::create($validateData);
    } catch (\Throwable $th) {
      $errorCode = $th->errorInfo[1];
      if ($errorCode == 1062) {

        return back()->with(
          'registerError',
          'NIP telah terdaftar'
        );
      }
    }
    return redirect("/login");
  }
}
