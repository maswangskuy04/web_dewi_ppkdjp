<?php

namespace App\Http\Controllers;

use App\Models\PesertaPelatihan;
use App\Models\Jurusan;
use App\Models\Gelombang;
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
        $request->validate([
            'id_jurusan' => 'required',
            'id_gelombang' => 'required',
            'nama_lengkap' => 'required|string',
            'nik' => 'required|string',
            'kartu_keluarga' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'pendidikan_terakhir' => 'required|string',
            'nama_sekolah' => 'required|string',
            'kejuruan' => 'required|string',
            'nomor_hp' => 'required|string',
            'email' => 'required|email',
            'aktivitas_saat_ini' => 'required|string',
            'status' => 'required|string',
        ]);

        PesertaPelatihan::create([
            'id_jurusan' => $request->id_jurusan,
            'id_gelombang' => $request->id_gelombang,
            'nama_lengkap' => $request->nama_lengkap,
            'nik' => $request->nik,
            'kartu_keluarga' => $request->kartu_keluarga,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'nama_sekolah' => $request->nama_sekolah,
            'kejuruan' => $request->kejuruan,
            'nomor_hp' => $request->nomor_hp,
            'email' => $request->email,
            'aktivitas_saat_ini' => $request->aktivitas_saat_ini,
            'status' => $request->status,
        ]);

        return redirect()->route('peserta-pelatihan.index')->with('message', 'Data Peserta Berhasil Ditambahkan');
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
        //
    }
}
