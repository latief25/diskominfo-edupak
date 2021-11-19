<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarPegawai extends Controller
{
  public function index(Request $request)
  {
    $data = DB::table('users')->select('nip', 'nama')->orderBy('updated_at', 'desc')->get();
    if ($request->ajax()) {
      return datatables($data)->toJson();
    }
    return view('Dashboard.Admin.list_user', ["title" => "Daftar Pegawai"]);
  }
}
