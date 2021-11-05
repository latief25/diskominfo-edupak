<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "nama" => "required|max:50|min:3",
            "nip" => "required|numeric|digits:18",
            "nomor_seri_karpeg" => "required|min:3",
            "tempat_lahir" => "required|min:3",
            "tanggal_lahir" => "required|date|before:today",
            "jenis_kelamin" => "required|in:L,P",
            "pendidikan_tertinggi" => "required",

        ]);
        dd($request);
    }
}
