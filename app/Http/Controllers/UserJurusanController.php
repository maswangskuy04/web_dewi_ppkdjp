<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Level;
use App\Models\User;
use App\Models\UserJurusan;
use Illuminate\Http\Request;

class UserJurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $level = Level::get();
        $jurusan = Jurusan::get();
        $userjurusan = UserJurusan::all();
        return view('admin.user-jurusan.index', compact('userjurusan', 'level', 'jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::get();
        $level = Level::where('id', 3)->get();
        $jurusan = Jurusan::get();
        return view('admin.user-jurusan.create', compact('user', 'level', 'jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'id_level' => 'required',
            'id_jurusan' => 'required'
        ]);

        UserJurusan::create([
            'id_user' => $request->id_user,
            'id_level' => $request->id_level,
            'id_jurusan' => $request->id_jurusan
        ]);

        return redirect()->route('user-jurusan.index')->with('message', 'Berhasil menambah user jurusan');
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
        $userjurusan = UserJurusan::findOrFail($id);
        $userjurusan->delete();
        return redirect()->route('user-jurusan.index')->with('message', 'Data User Jurusan berhasil dihapus sementara!');
    }

    public function restore(string $id)
    {
        $userjurusan = UserJurusan::onlyTrashed()->findOrFail($id);
        $userjurusan->restore();
        return redirect()->route('user-jurusan.index')->with('message', 'Data User Jurusan Kembali.');
    }
}
