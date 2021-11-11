<?php

namespace App\Http\Controllers;


class PrintPakController extends Controller
{
  public function index()
  {
    return view('Print.pak', [
      "title" => "Print PAK"
    ]);
  }
}
