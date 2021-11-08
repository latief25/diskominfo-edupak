<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

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
      "pangkat" => "required",
      "tmt_golongan_ruang" => "required",
    ]);
    $user = User::where('nip', $validateData['nip'])->first();
    $user->nama = $validateData['nama'];
    $user->nip = $validateData['nip'];
    $user->tempat_lahir = $validateData['tempat_lahir'];
    $user->tanggal_lahir = $validateData['tanggal_lahir'];
    $user->jenis_kelamin = $validateData['jenis_kelamin'];
    $user->pendidikan_tertinggi = $validateData['pendidikan_tertinggi'];
    $user->nkarpeg = $validateData['nomor_seri_karpeg'];
    $user->pangkat_id = $validateData['pangkat'];
    $user->tmt_golongan_ruang = $validateData['tmt_golongan_ruang'];
    $user->save();
    return redirect('/dashboard');
  }
}
