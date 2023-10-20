<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.berita.index')->with([
            'beritas'=> Berita::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.berita.tambah-berita.index')->with([
            'kategoris'=> Kategori::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'kategori_id'=> 'required',
            'judul'=> 'required|max:50',
            'isi'=> 'required',
            'tanggal_publikasi'=> 'required',
        ]);

        $validasiData['user_id'] = auth()->user()->id;

        Berita::create($validasiData);
        
        return redirect()->route('berita.index')->with('success','Postingan berita baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        // return response()->json([
        //     'data' => $berita
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard.berita.edit-berita.index')->with([
            'berita' => Berita::find($id),
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validasiData = $request->validate([
            'kategori_id'=> 'required',
            'judul'=> 'required|max:50',
            'isi'=> 'required',
            'tanggal_publikasi'=> 'required',
        ]);

        $validasiData['user_id'] = auth()->user()->id;

        Berita::where('id', $id)->update($validasiData);
        
        return redirect()->route('berita.index')->with('success','Postingan berita berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Berita::find($id);
        $data->delete();
        return redirect()->route('berita.index')->with('success','Postingan berita berhasil dihapus');
    }
}
