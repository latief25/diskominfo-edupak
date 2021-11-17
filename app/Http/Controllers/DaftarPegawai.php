<?php

namespace App\Http\Controllers;

use App\Models\User;

class DaftarPegawai extends Controller
{
  public function index()
  {
    $data = User::paginate(2);
    return view('Dashboard.Admin.list_user', ['data' => $data, 'title' => 'Daftar Pegawai']);
  }
}
