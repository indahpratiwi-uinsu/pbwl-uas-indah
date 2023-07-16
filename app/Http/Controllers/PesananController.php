<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Menu;
use App\Models\Pelanggan;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pesanan::all();
        return view('pesanan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        return view('pesanan.create',[
            'menu' => Menu::get(),
            'meja' => Meja::get(),
            'pelanggan' => Pelanggan::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pesanan::create(
            [
                'pesanan_id_menu' => $request->pesanan_id_menu,
                'pesanan_id_meja' => $request->pesanan_id_meja,
                'pesanan_id_pelanggan' => $request->pesanan_id_pelanggan,
                'pesanan_jumlah' => $request->pesanan_jumlah,
                'pesanan_status' => $request->pesanan_status
            ]
        );

        return redirect('pesanan')->with('success','Data berhasil ditambahkan');
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
        $row = Pesanan::findOrFail($id);
        return view('pesanan.edit',[
            'meja' => Meja::get(),
            'menu' => Menu::get(),
            'pelanggan' => Pelanggan::get()
        ], compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pesanan::findOrFail($id);
        $row->update(
            [
                'pesanan_id_menu' => $request->pesanan_id_menu,
                'pesanan_id_meja' => $request->pesanan_id_meja,
                'pesanan_id_pelanggan' => $request->pesanan_id_pelanggan,
                'pesanan_jumlah' => $request->pesanan_jumlah,
                'pesanan_status' => $request->pesanan_status
            ]
        );
        return redirect('pesanan')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pesanan::findOrFail($id);
        $row->delete();

        return redirect('pesanan')->with('success', 'Data berhasil dihapus');
    }
}