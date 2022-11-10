<?php

namespace App\Http\Controllers;

use Validator;
use DB;
use Illuminate\Http\Request;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ReservasikuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservasis = Reservasi::all();
        return view('reservasiku.index', [
            'reservasis' => $reservasis,
            'title' => 'Reservasi'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit(Reservasi $reservasiku)
    {
        // $users = Reservasi::find($id);
        // return view('reservasiku.edit', compact('reservasiku'), [
        //     'title' => 'Reservasis'
        // ]);

        $user_id = Auth::user()->id;
        $users = DB::table('users')->where('id', $user_id)->paginate(1);
        return view('reservasiku.edit', compact('users', 'reservasiku'), [
            'title' => 'Edit Reservasi'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservasi $reservasiku)
    {

        $this->validate($request, [
            
            'tanggal'     => 'required',
            'waktu'       => 'required',
            'orang'       => 'required',
            'spesial'     => 'required',
            'total'       => 'required',
            'bukti'       => 'required|image|mimes:png,jpg,jpeg',
            'meja'       => 'required'
        ]);
    
        //get data Reservasi by ID
        $reservasiku = Reservasi::findOrFail($reservasiku->id);
    
        if($request->file('bukti') == "") {
    
            $reservasiku->update([
                'user_id' => Auth::user()->id,
                'tanggal'   => $request->tanggal,
                'waktu'     => $request->waktu,
                'orang'     => $request->orang,
                'spesial'   => $request->spesial,
                'total'     => $request->total,
                'meja'     => $request->meja,
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/reservasis/'.$reservasiku->bukti);
    
            //upload new image
            $bukti = $request->file('bukti');
            $bukti->storeAs('public/reservasis', $bukti->hashName());
    
            $reservasiku->update([
                'tanggal'   => $request->tanggal,
                'waktu'     => $request->waktu,
                'orang'     => $request->orang,
                'spesial'   => $request->spesial,
                'total'     => $request->total,
                'bukti'     => $bukti->hashName(),
                'meja'     => $request->meja
            ]);
    
        }
        $reservasiku->save();
        if($reservasiku){
            //redirect dengan pesan sukses
            return redirect()->route('reservasiku.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('reservasiku.index')->with(['error' => 'Data Gagal Disimpan!']);
        }


        // $this->validate($request, [
        //     'tanggal'     => 'required',
        //     'waktu'       => 'required',
        //     'orang'       => 'required',
        //     'spesial'     => 'required',
        //     'total'       => 'required',
        //     'bukti'       => 'required|image|mimes:png,jpg,jpeg',
        //     'meja'       => 'required'

        // ]);

        // $reservasiku = Reservasi::findOrFail($reservasiku->id);

        // $reservasiku->update([
        //     'tanggal'   => $request->tanggal,
        //     'waktu'     => $request->waktu,
        //     'orang'     => $request->orang,
        //     'spesial'   => $request->spesial,
        //     'total'     => $request->total,
        //     'meja'     => $request->meja,
        // ]);
        // $reservasiku->save();
        // return redirect()->route('reservasi');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $reservasiku = Reservasi::findOrFail($id);
        Storage::disk('local')->delete('public/reservasis/'.$reservasiku->bukti);
        $reservasiku->delete();

        if($reservasiku){
            //redirect dengan pesan sukses
            return redirect()->route('reservasiku.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('reservasiku.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
