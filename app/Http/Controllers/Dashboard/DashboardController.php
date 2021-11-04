<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $data = User::where('nip', auth()->user()->nip)->first();

        return view("Dashboard.dashboard", [
            "title" => "Dashboard",
            "data" => $data
        ]);
    }
}
