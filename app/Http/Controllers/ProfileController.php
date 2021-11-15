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
      "jabatan_fungsional" => "required",
      "tmt_jabatan_fungsional" => "required",
      "masa_kerja_golongan_lama" => "required",
      "masa_kerja_golongan_baru" => "required",
      "unit_kerja" => "required",

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
    $user->jabatan_fungsional_id = $validateData['jabatan_fungsional'];
    $user->tmt_jabatan_fungsional = $validateData['tmt_jabatan_fungsional'];
    $user->masa_kerja_golongan_lama = "$validateData[masa_kerja_golongan_lama]-01";
    $user->masa_kerja_golongan_baru = "$validateData[masa_kerja_golongan_baru]-01";
    $user->unit_kerja_id = $validateData['unit_kerja'];
    $user->save();
    return redirect('/dashboard')->with("berhasil", "Berhasil menyimpan data");
  }
}
