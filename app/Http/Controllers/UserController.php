<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $level = Level::get();
        return view('admin.user.create', compact('level'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_level' => 'required',
            'nama_lengkap' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        User::create([
            'id_level' => $request->id_level,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('user.index')->with('message', 'Data User berhasil ditambah!');
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
        $level = Level::get();
        $edit = User::findOrFail($id);
        return view('admin.user.edit', compact('edit', 'level'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        // $request->validate([
        //     'id_level' => 'required',
        //     'nama_lengkap' => 'required|string',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'nullable|min:8'
        // ]);

        $user->update([
            'id_level' => $request->id_level,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect()->route('user.index')->with('message', 'Data User berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('message', 'Data User berhasil dihapus sementara!');
    }
}
