<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Pangkat;
use App\Models\UnitKerja;
use App\Http\Controllers\Controller;
use App\Models\JabatanFungsional;

class DashboardController extends Controller
{
    public function index()
    {
        $data = User::where('nip', auth()->user()->nip)->first();
        $data->masa_kerja_golongan_lama = substr($data->masa_kerja_golongan_lama, 0, 7);
        $data->masa_kerja_golongan_baru = substr($data->masa_kerja_golongan_baru, 0, 7);
        $data->password = null;
        $pangkat = Pangkat::all();
        $unit_kerja = UnitKerja::all();
        $jabatan_fungsional = JabatanFungsional::all();
        return view("Dashboard.dashboard", [
            "title" => "Dashboard",
            "data" => $data,
            "pangkat" => $pangkat,
            "unit_kerja" => $unit_kerja,
            "jabatan_fungsional" => $jabatan_fungsional
        ]);
    }
}
