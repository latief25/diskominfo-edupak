<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarPegawai extends Controller
{
  public function index()
  {
    $data = DB::table('users')->orderBy('updated_at', 'desc')->paginate(15);
    return view('Dashboard.Admin.list_user', ['data' => $data, 'title' => 'Daftar Pegawai']);
  }

  public function search(Request $request)
  {
    dd($request);
  }
}
