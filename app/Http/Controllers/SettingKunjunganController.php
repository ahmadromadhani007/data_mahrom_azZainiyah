<?php

namespace App\Http\Controllers;

use App\Models\SettingKunjungan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingKunjunganController extends Controller
{
    public function index()
    {
        $setting_kunjungan = SettingKunjungan::all();
        return response()->json([
            'status' => 'success',
            'data' => $setting_kunjungan
        ]);
    }

    public function kunjungan()
    {
        $kunjungan = SettingKunjungan::all();
        $data = [
            "title" => "Setting Kunjungan",
            "wrapper" => "Data Kunjungan"
        ];
        return view('kunjungan', compact('kunjungan', 'data'));
    }

    public function tambahKunjungan()
    {
        $santri = SettingKunjungan::all();
        $data = [
            "title" => "Tambah Kunjungan",
            "wrapper" => "Tambah Data Kunjungan"
        ];
        return view('tambahKunjungan', compact('santri', 'data'));
    }


    public function show($id)
    {
        $setting_kunjungan = SettingKunjungan::find($id);
        if (!$setting_kunjungan) {
            return response()->json([
                'status' => 'error',
                'message' => 'setting_kunjungan not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $setting_kunjungan
        ]);
    }

    public function create(Request $request)
    {
        $rules = [
            'jml_kunjungan' => 'required | string',
            'jml_tamu' => 'required | string',
            'hari_kunjungan' => 'required | string',
            'keterangan' => 'required | string'
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message ' => $validator->errors()
            ], 400);
        }

        $setting_kunjungan = SettingKunjungan::create($data);

        return response()->json(['status' => 'success', 'data' => $setting_kunjungan]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'jml_kunjungan' => 'string',
            'jml_tamu' => 'string',
            'hari_kunjungan' => 'string',
            'keterangan' => 'string'
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message ' => $validator->errors()
            ], 400);
        }

        $setting_kunjungan = SettingKunjungan::find($id);

        if (!$setting_kunjungan) {
            return response()->json([
                'status' => 'error',
                "message" => 'setting_kunjungan not found'
            ], 404);
        }

        $setting_kunjungan->fill($data);

        $setting_kunjungan->save();
        return response()->json([
            'status' => 'success',
            'data' => $setting_kunjungan
        ]);
    }

    public function destroy($id)
    {
        $setting_kunjungan = SettingKunjungan::find($id);

        if (!$setting_kunjungan) {
            return response()->json([
                'status' => 'error',
                "message" => 'setting_kunjungan not found'
            ], 404);
        }

        $setting_kunjungan->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'setting_kunjungan deleted'
        ]);
    }
}
