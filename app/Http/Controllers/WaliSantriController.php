<?php

namespace App\Http\Controllers;

use App\Models\WaliSantri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WaliSantriController extends Controller
{
    public function __construct()
    {
        $this->WaliSantri = new WaliSantri();
        $this->middleware('auth');
    }

    public function index()
    {
        $wali_santri = WaliSantri::all();
        return response()->json([
            'status' => 'success',
            'data' => $wali_santri
        ]);
    }

    public function waliSantri()
    {
        $mahrom = WaliSantri::all();
        $data = [
            "title" => "Wali Santri",
            "wrapper" => "Data Wali Santri"
        ];
        return view('waliSantri', compact('mahrom', 'data'));
    }

    public function tambahWaliSantri()
    {
        $santri = WaliSantri::all();
        $data = [
            "title" => "Tambah Wali Santri",
            "wrapper" => "Tambah Wali Santri"
        ];
        return view('tambahWaliSantri', compact('santri', 'data'));
    }

    public function show($id)
    {
        $wali_santri = WaliSantri::find($id);
        if (!$wali_santri) {
            return response()->json([
                'status' => 'error',
                'message' => 'wali_santri not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $wali_santri
        ]);
    }

    public function createWali(Request $request)
    {
        $rules = [
            'nama' => 'required | string',
            'alamat' => 'required | string',
            'no_hp' => 'required | string',
            'email' => 'required | string',
            'status' => 'required | in:ayah,ibu'
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message ' => $validator->errors()
            ], 400);
        }

        $wali_santri = WaliSantri::create($data);

        return redirect('/santri');
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'string',
            'alamat' => 'string',
            'no_hp' => 'string',
            'email' => 'string',
            'status' => 'in:ayah, ibu'
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message ' => $validator->errors()
            ], 400);
        }

        $wali_santri = WaliSantri::find($id);

        if (!$wali_santri) {
            return response()->json([
                'status' => 'error',
                "message" => 'wali_santri not found'
            ], 404);
        }

        $wali_santri->fill($data);

        $wali_santri->save();
        return response()->json([
            'status' => 'success',
            'data' => $wali_santri
        ]);
    }

    public function destroy($id)
    {
        $wali_santri = WaliSantri::find($id);

        if (!$wali_santri) {
            return response()->json([
                'status' => 'error',
                "message" => 'wali_santri not found'
            ], 404);
        }

        $wali_santri->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'wali_santri deleted'
        ]);
    }
}
