<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        $jurusan = Jurusan::paginate(10);
        return view('admin.jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required|string'
        ]);

        Jurusan::create([
            'nama_jurusan' => $request->nama_jurusan
        ]);

        return redirect()->route('jurusan.index')->with('message', 'Data Jurusan berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $edit = Jurusan::findOrFail($id);
        return view('admin.jurusan.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $request->validate([
            'nama_jurusan' => 'required|string'
        ]);

        Jurusan::where('id', $id)->update([
            'nama_jurusan' => $request->nama_jurusan
        ]);

        return redirect()->route('jurusan.index')->with('message', 'Data Jurusan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        //
    }
}
