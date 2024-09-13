<?php

namespace App\Http\Controllers;

use App\Models\PesertaPelatihan;
use App\Models\Jurusan;
use App\Models\Gelombang;
use App\Models\User;
use Illuminate\Http\Request;

class PesertaPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = PesertaPelatihan::all();
        return view('admin.peserta-pelatihan.index', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::all();
        $peserta = PesertaPelatihan::get();
        return view('admin.peserta-pelatihan.index', compact('jurusan', 'gelombang', 'peserta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelatihan = PesertaPelatihan::findOrFail($id);
        $pelatihan->delete();
        return redirect()->route('peserta-pelatihan.index')->with('message', 'Data berhasil dihapus sementara!');
    }

    public function updateStatus(Request $request) {
        $peserta = PesertaPelatihan::find($request->id);
        if($peserta) {
            $peserta->status = $request->status;
            $peserta->save();
            return response()->json(['status' => $peserta->status ? 'aktif' : 'tidak aktif']);
        } else {
            return response()->json(['error' => 'Peserta not found'], 404);
        }
    }
}
