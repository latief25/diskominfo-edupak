<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DaftarPegawai extends Controller
{
  public function index()
  {
    $data = User::all();
    return view('Dashboard.Admin.list_user', ['data' => $data, 'title' => 'Daftar Pegawai']);
  }
}
