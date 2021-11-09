<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Pangkat;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  public function index()
  {
    $data = User::where('nip', auth()->user()->nip)->first();
    $data->masa_kerja_golongan_lama = substr($data->masa_kerja_golongan_lama, 0, 7);
    $data->masa_kerja_golongan_baru = substr($data->masa_kerja_golongan_baru, 0, 7);
    $data->password = null;
    $pangkat = Pangkat::all();
    return view("Dashboard.dashboard", [
      "title" => "Dashboard",
      "data" => $data,
      "pangkat" => $pangkat
    ]);
  }
}
