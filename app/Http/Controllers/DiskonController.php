<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Diskon;

use Illuminate\Support\Facades\Storage;

class DiskonController extends Controller
{
    public function diskon()
    {
        $diskons = Diskon::latest()->paginate(10);
        return view('diskon.diskon', compact('diskons'), [
            'title' => 'Diskon'
        ]);
    }
    
    public function index()
    {
        $diskons = Diskon::latest()->paginate(10);
        return view('diskon.index', compact('diskons'), [
            'title' => 'Diskon'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diskon.create', [
            'title' => 'Tambah Diskon'
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
        $gambar->storeAs('public/diskons', $gambar->hashName());
    
        $diskon = Diskon::create([
            'judul' => $request->judul,
            'gambar'   => $gambar->hashName(),
            'deskripsi'     => $request->deskripsi
        ]);
    
        if($diskon){
            //redirect dengan pesan sukses
            return redirect()->route('diskon.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('diskon.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Diskon $diskon)
    {
        return view('diskon.edit', compact('diskon'), [
            'title' => 'Edit Diskon'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diskon $diskon)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'gambar'       => 'required|image|mimes:png,jpg,jpeg',
            'deskripsi'         => 'required'
        ]);
    
        //get data Diskon by ID
        $diskon = Diskon::findOrFail($diskon->id);
    
        if($request->file('gambar') == "") {
    
            $diskon->update([
                'judul' => $request->judul,
                'deskripsi'     => $request->deskripsi
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/diskons/'.$diskon->gambar);
    
            //upload new image
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/diskons', $gambar->hashName());
    
            $diskon->update([
                'judul' => $request->judul,
                'gambar'   => $gambar->hashName(),
                'deskripsi'     => $request->deskripsi
            ]);
    
        }
    
        if($diskon){
            //redirect dengan pesan sukses
            return redirect()->route('diskon.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('diskon.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $diskon = Diskon::findOrFail($id);
        Storage::disk('local')->delete('public/diskons/'.$diskon->gambar);
        $diskon->delete();

        if($diskon){
            //redirect dengan pesan sukses
            return redirect()->route('diskon.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('diskon.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
