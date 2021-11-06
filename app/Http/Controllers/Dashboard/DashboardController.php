<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Pangkat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data = User::where('nip', auth()->user()->nip)->first();
        $pangkat = Pangkat::all();
        return view("Dashboard.dashboard", [
            "title" => "Dashboard",
            "data" => $data,
            "pangkat" => $pangkat
        ]);
    }
}
