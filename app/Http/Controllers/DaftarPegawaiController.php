<?php

namespace App\Http\Controllers;

use App\Models\JabatanFungsional;
use App\Models\Pangkat;
use App\Models\UnitKerja;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DaftarPegawaiController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $data_pegawai = DB::table('users')->select('id', 'nip', 'nama', 'pangkat_id')->orderBy('updated_at', 'desc')->get();
    $pangkat = Pangkat::all();
    $unit_kerja = UnitKerja::all();
    $jabatan_fungsional = JabatanFungsional::all();
    if ($request->ajax()) {
      return datatables()->of($data_pegawai)
        ->addColumn('action', function ($data) {
          $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
          $button .= '&nbsp;&nbsp;';
          $button .= '<button type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';
          return $button;
        })
        ->rawColumns(['action'])
        ->addIndexColumn()
        ->make(true);
    }
    return view('Dashboard.Admin.list_user', [
      "title" => "Daftar Pegawai",
      "pangkat" => $pangkat,
      "unit_kerja" => $unit_kerja,
      "jabatan_fungsional" => $jabatan_fungsional,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $id = $request->id;

    $post   =   User::updateOrCreate(
      ['id' => $id],
      [
        'nip' => $request->nip,
        'nama' => $request->nama,
        'pangkat_id' => $request->pangkat,
      ]
    );

    return response()->json($post);
  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $where = array('id' => $id);
    $post  = User::where($where)->first();

    return response()->json($post);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $post = User::where('id', $id)->delete();

    return response()->json($post);
  }
}
