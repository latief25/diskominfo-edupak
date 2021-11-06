<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {
    return view("Auth.login", ["title" => "Login"]);
  }

  public function authenticate(Request $request)
  {
    $credentials = $request->validate([
      "nip" => "required|numeric|digits:18",
      "password" => "required|min:8|max:50",
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      return redirect()->intended('dashboard');
    }

    return back()->with(
      'loginError',
      'NIP atau password salah'
    );
  }
}
