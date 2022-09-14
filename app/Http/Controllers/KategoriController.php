<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kategori;

use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = Kategori::latest()->paginate(10);
        return view('kategori.index', compact('kategoris'), [
            'title' => 'Kategori'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create', [
            'title' => 'Tambah Kategori'
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
            'KategoriRumah'     => 'required',
            'gambarRumah'       => 'required|image|mimes:png,jpg,jpeg',
            'deskripsi'         => 'required'
        ]);
    
        //upload gambarRumah
        $gambarRumah = $request->file('gambarRumah');
        $gambarRumah->storeAs('public/kategoris', $gambarRumah->hashName());
    
        $kategori = Kategori::create([
            'KategoriRumah' => $request->KategoriRumah,
            'gambarRumah'   => $gambarRumah->hashName(),
            'deskripsi'     => $request->deskripsi
        ]);
    
        if($kategori){
            //redirect dengan pesan sukses
            return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('kategori.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'), [
            'title' => 'Edit Kategori'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        $this->validate($request, [
            'KategoriRumah'     => 'required',
            'gambarRumah'       => 'required|image|mimes:png,jpg,jpeg',
            'deskripsi'         => 'required'
        ]);
    
        //get data Kategori by ID
        $kategori = Kategori::findOrFail($kategori->id);
    
        if($request->file('gambarRumah') == "") {
    
            $kategori->update([
                'KategoriRumah' => $request->KategoriRumah,
                'deskripsi'     => $request->deskripsi
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/kategoris/'.$kategori->gambarRumah);
    
            //upload new image
            $gambarRumah = $request->file('gambarRumah');
            $gambarRumah->storeAs('public/kategoris', $gambarRumah->hashName());
    
            $kategori->update([
                'KategoriRumah' => $request->KategoriRumah,
                'gambarRumah'   => $gambarRumah->hashName(),
                'deskripsi'     => $request->deskripsi
            ]);
    
        }
    
        if($kategori){
            //redirect dengan pesan sukses
            return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('kategori.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $kategori = Kategori::findOrFail($id);
        Storage::disk('local')->delete('public/kategoris/'.$kategori->gambarRumah);
        $kategori->delete();

        if($kategori){
            //redirect dengan pesan sukses
            return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('kategori.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
