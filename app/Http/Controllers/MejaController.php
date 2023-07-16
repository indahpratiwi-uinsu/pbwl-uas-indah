<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Menu;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Meja::all();
        return view('meja.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meja.create',[
            'menu' => Menu::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Meja::create(
            [
                'meja_id_menu' => $request->meja_id_menu,
                'meja_nomor' => $request->meja_nomor,
                'meja_status' => $request->meja_status
            ]
        );

        return redirect('meja')->with('success','Data berhasil ditambahkan');
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
        $row = Meja::findOrFail($id);
        return view('meja.edit',[
            'menu' => Menu::get()
        ], compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Meja::findOrFail($id);
        $row->update(
            [
                'meja_id_menu' => $request->meja_id_menu,
                'meja_nomor' => $request->meja_nomor,
                'meja_status' => $request->meja_status
            ]
        );
        return redirect('meja')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Meja::findOrFail($id);
        $row->delete();

        return redirect('meja')->with('success', 'Data berhasil dihapus');
    }
}