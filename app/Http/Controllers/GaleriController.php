<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Galeri;

use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function galeri()
    {
        $galeris = Galeri::latest()->paginate(10);
        return view('galeri.galeri', compact('galeris'), [
            'title' => 'Galeri'
        ]);
    }

    public function index()
    {
        $galeris = Galeri::latest()->paginate(10);
        return view('galeri.index', compact('galeris'), [
            'title' => 'Galeri'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create', [
            'title' => 'Tambah Galeri'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'gambar'    => 'required|image|mimes:png,jpg,jpeg',
            'deskripsi' => 'required'
        ]);

        //upload gambar
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/galeris', $gambar->hashName());

        $galeri = Galeri::create([
            'judul' => $request->judul,
            'gambar'   => $gambar->hashName(),
            'deskripsi'     => $request->deskripsi
        ]);

        if($galeri){
            //redirect dengan pesan sukses
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        return view('galeri.edit', compact('galeri'), [
            'title' => 'Edit Galeri'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'gambar'       => 'required|image|mimes:png,jpg,jpeg',
            'deskripsi'         => 'required'
        ]);

        //get data Galeri by ID
        $galeri = Galeri::findOrFail($galeri->id);

        if($request->file('gambar') == "") {

            $galeri->update([
                'judul' => $request->judul,
                'deskripsi'     => $request->deskripsi
            ]);

        } else {

            //hapus old image
            Storage::disk('local')->delete('public/galeris/'.$galeri->gambar);

            //upload new image
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/galeris', $gambar->hashName());

            $galeri->update([
                'judul' => $request->judul,
                'gambar'   => $gambar->hashName(),
                'deskripsi'     => $request->deskripsi
            ]);

        }

        if($galeri){
            //redirect dengan pesan sukses
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        Storage::disk('local')->delete('public/galeris/'.$galeri->gambar);
        $galeri->delete();

        if($galeri){
            //redirect dengan pesan sukses
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}