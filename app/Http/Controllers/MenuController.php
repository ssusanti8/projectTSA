<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function menu()
    {
        $menus = Menu::latest()->paginate(10);
        return view('menu.menu', compact('menus'), [
            'title' => 'Menu'
        ]);
    }
    public function index()
    {
        $menus = Menu::latest()->paginate(10);
        return view('menu.index', compact('menus'), [
            'title' => 'Menu'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create', [
            'title' => 'Tambah Menu'
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
            'nama'     => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);

        $menu = Menu::create([
            'nama' => $request->nama,
            'harga'     => $request->harga,
            'deskripsi' => $request->deskripsi
        ]);

        if($menu){
            //redirect dengan pesan sukses
            return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('menu.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'), [
            'title' => 'Edit Menu'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'harga'         => 'required',
            'deskripsi' => 'required'
        ]);

        //get data Menu by ID
        $menu = Menu::findOrFail($menu->id);

            $menu->update([
                'nama' => $request->nama,
                'harga'     => $request->harga,
                'deskripsi' => $deskripsi->deskripsi
            ]);

        if($menu){
            //redirect dengan pesan sukses
            return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('menu.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $menu = Menu::findOrFail($id);
        $menu->delete();

        if($menu){
            //redirect dengan pesan sukses
            return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('menu.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
