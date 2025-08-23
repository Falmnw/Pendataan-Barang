<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('home', compact("barangs"));
    }

    public function add()
    {
        return view('addbarang');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        $fotoPath = null;
        if ($req->hasFile('foto')) {
            $fotoPath = $req->file('foto')->store('barangs', 'public');
        }

        Barang::create([
            'kategori' => $req->kategori,
            'nama' => $req->nama,
            'harga' => $req->harga,
            'jumlah' => $req->jumlah,
            'foto' => $fotoPath,

        ]);

        return back()->with('success', 'Barang berhasil ditambahkan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBarangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('update', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $req)
    {
        $fotoPath = null;
        if ($req->hasFile('foto')) {
            $fotoPath = $req->file('foto')->store('barangs', 'public');
        }

        Barang::findOrFail($id)->update([
            'kategori' => $req->kategori,
            'nama' => $req->nama,
            'harga' => $req->harga,
            'jumlah' => $req->jumlah,
            'foto' => $fotoPath,
        ]);

        $barangs = Barang::all();
        return view('home', compact("barangs"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Barang::destroy($id);
        return back();
    }
}
