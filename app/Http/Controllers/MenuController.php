<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Menu::all();
        return view('menu.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Menu::create(
            [
                'menu_nama' => $request->menu_nama,
                'menu_harga' => $request->menu_harga
            ]
        );

        return redirect('menu')->with('success','Data berhasil ditambahkan');
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
        $row = Menu::findOrFail($id);
        return view('menu.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Menu::findOrFail($id);
        $row->update(
            [
                'menu_nama' => $request->menu_nama,
                'menu_harga' => $request->menu_harga
            ]
        );
        return redirect('menu')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Menu::findOrFail($id);
        $row->delete();

        return redirect('menu')->with('success', 'Data berhasil dihapus');
    }
}