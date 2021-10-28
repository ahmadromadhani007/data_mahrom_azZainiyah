<?php

namespace App\Http\Controllers;

use App\Models\Mahrom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MahromController extends Controller
{
    public function index()
    {
        $mahrom = Mahrom::all();
        $data = [
            "title" => "Admin",
            "wrapper" => "Dashboard"
        ];
        return view('dashboard', compact('mahrom', 'data'));
        // $mahrom = Mahrom::all();
        // return response()->json([
        //     'status' => 'success',
        //     'data' => $mahrom
        // ]);
    }

    public function santri()
    {
        $mahrom = Mahrom::all();
        $data = [
            "title" => "Santri",
            "wrapper" => "Data Santri"
        ];
        return view('santri', compact('mahrom', 'data'));
    }

    public function show($id)
    {
        $mahrom = Mahrom::find($id);
        if (!$mahrom) {
            return response()->json([
                'status' => 'error',
                'message' => 'mahrom not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $mahrom
        ]);
    }

    // public function tampil()
    // {
    //     $mahrom = Mahrom::all();
    //     return view('home', compact('mahrom'));
    // }

    public function create(Request $request)
    {
        $rules = [
            'nama' => 'required | string',
            'alamat' => 'required | string',
            'daerah' => 'required | string'
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message ' => $validator->errors()
            ], 400);
        }

        $mahrom = Mahrom::create($data);

        return response()->json(['status' => 'success', 'data' => $mahrom]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'string',
            'alamat' => 'string',
            'daerah' => 'string'
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message ' => $validator->errors()
            ], 400);
        }

        $mahrom = Mahrom::find($id);

        if (!$mahrom) {
            return response()->json([
                'status' => 'error',
                "message" => 'mahrom not found'
            ], 404);
        }

        $mahrom->fill($data);

        $mahrom->save();
        return response()->json([
            'status' => 'success',
            'data' => $mahrom
        ]);
    }

    public function destroy($id)
    {
        $mahrom = Mahrom::find($id);

        if (!$mahrom) {
            return response()->json([
                'status' => 'error',
                "message" => 'mahrom not found'
            ], 404);
        }

        $mahrom->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'mahrom deleted'
        ]);
    }
}
