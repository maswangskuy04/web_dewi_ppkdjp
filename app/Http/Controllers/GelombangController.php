<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use Illuminate\Http\Request;

class GelombangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gelombang = Gelombang::all();
        return view('admin.gelombang.index', compact('gelombang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gelombang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_gelombang' => 'required|string',
        ]);
        Gelombang::create([
            'nama_gelombang' =>$request->nama_gelombang,
        ]);
        return redirect()->route('gelombang.index')->with('message', 'Data Berhasil Ditambahkan');
    }

    public function status(Request $request, $id)
    {
        $request->validate([
            'aktif' => 'required'
        ]);

        try {
            $gelombang = Gelombang::find($id);
            $gelombang->aktif = $request->input('aktif');
            $gelombang->save();
        } catch (\Throwable $th) {
            return response()->json([
                'error' => $th->getMessage()
            ]);
        }

        return response()->json(['success' => true, 'message' => 'Status updated successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gelombang $gelombang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $edit = Gelombang::findOrFail($id);
        return view('admin.gelombang.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $request->validate([
            'nama_gelombang' => 'required|string',
        ]);
        Gelombang::create([
            'nama_gelombang' => $request->nama_gelombang,
        ]);
        return redirect()->route('gelombang.index')->with('message', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $gelombang = Gelombang::findOrFail($id);
        $gelombang->delete();

        return redirect()->route('gelombang.index')->with('message', 'Data Gelombang berhasil dihapus sementara');
    }


    

    // public function trash()
    // {
    //     $gelombang = Gelombang::onlyTrashed()->get();
    //     return view('admin.gelombang.recovery', compact('gelombang'));
    // }
}
