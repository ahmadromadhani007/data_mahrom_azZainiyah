<?php

namespace App\Http\Controllers;

use App\Models\WaliSantri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WaliSantriController extends Controller
{
    public function index()
    {
        $wali_santri = WaliSantri::all();
        return response()->json([
            'status' => 'success',
            'data' => $wali_santri
        ]);
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

    public function create(Request $request)
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

        return response()->json(['status' => 'success', 'data' => $wali_santri]);
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
