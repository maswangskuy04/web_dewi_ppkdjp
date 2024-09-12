<?php

namespace App\Http\Controllers\API;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestController extends Controller
{
    public function jurusan()
    {
        $jurusan = Jurusan::get();
        return response()->json(['data' => $jurusan, 'message' => 'Data Jurusan'], 200);
        // return response()->json('Data Jurusan');
    }
}
