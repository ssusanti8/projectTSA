<?php

namespace App\Http\Controllers;

use Validator;
use DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PDF;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function reservasi()
    {
        $user_id = Auth::user()->id;
        $reservasis = Reservasi::all();
        return view('reservasi.reservasi', [
            'reservasis' => $reservasis,
            'users' => User::with('reservasis')->whereId(auth()->user()->id)->first(),
            'title' => 'Reservasi'
        ]);
    }

    public function index()
    {
        $user_id = Auth::user()->id;
        // $reservasis = Reservasi::all();
        // $reservasis = DB::table('reservasis')->where('user_id', $user_id)->paginate(10);
        $reservasis = Reservasi::where('user_id', $user_id)->paginate(10);
        return view('reservasi.index', compact('reservasis'), [
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
        $user_id = Auth::user()->id;
        $users = DB::table('users')->where('id', $user_id)->paginate(1);
        return view('reservasi.create', compact('users'), [
            'title' => 'Tambah Reservasi'
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
            'tanggal'     => 'required',
            'waktu'       => 'required',
            'orang'       => 'required',
            'spesial'     => 'required',
            'total'       => 'required',
            'bukti'       => 'required|image|mimes:png,jpg,jpeg'
        ]);
    
        //upload bukti
        $bukti = $request->file('bukti');
        $bukti->storeAs('public/reservasis', $bukti->hashName());
    
        $reservasi = Reservasi::create([
            'user_id' => Auth::user()->id,
            'tanggal'   => $request->tanggal,
            'waktu'     => $request->waktu,
            'orang'     => $request->orang,
            'spesial'   => $request->spesial,
            'total'     => $request->total,
            'bukti'     => $bukti->hashName(),
        ]);
    
        if($reservasi){
            //redirect dengan pesan sukses
            return redirect()->route('reservasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('reservasi.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    
    public function edit(Reservasi $reservasi)
    {
        $user_id = Auth::user()->id;
        $users = DB::table('users')->where('id', $user_id)->paginate(1);
        return view('reservasi.edit', compact('users', 'reservasi'), [
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
    public function update(Request $request, Reservasi $reservasi)
    {

        $this->validate($request, [
            
            'tanggal'     => 'required',
            'waktu'       => 'required',
            'orang'       => 'required',
            'spesial'     => 'required',
            'meja'       => 'required'
        ]);
    
        //get data Reservasi by ID
        $reservasi = Reservasi::findOrFail($reservasi->id);
    
            $reservasi->update([
                // 'user_id' => Auth::user()->id,
                'tanggal'   => $request->tanggal,
                'waktu'     => $request->waktu,
                'orang'     => $request->orang,
                'spesial'   => $request->spesial,
                'meja'     => $request->meja,
            ]);
            
        if($reservasi){
            //redirect dengan pesan sukses
            return redirect()->route('reservasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('reservasi.index')->with(['error' => 'Data Gagal Disimpan!']);
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

        // $reservasi = Reservasi::findOrFail($reservasi->id);

        // $reservasi->update([
        //     'tanggal'   => $request->tanggal,
        //     'waktu'     => $request->waktu,
        //     'orang'     => $request->orang,
        //     'spesial'   => $request->spesial,
        //     'total'     => $request->total,
        //     'meja'     => $request->meja,
        // ]);
        // $reservasi->save();
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
        $reservasi = Reservasi::findOrFail($id);
        Storage::disk('local')->delete('public/reservasis/'.$reservasi->bukti);
        $reservasi->delete();

        if($reservasi){
            //redirect dengan pesan sukses
            return redirect()->route('reservasi.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('reservasi.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function cetak_pdf()
    {
        $user_id = Auth::user()->id;
        $reservasis = Reservasi::all();
    	$pdf = PDF::loadview('reservasi.reservasi_pdf',compact('reservasis'));
    	return $pdf->download('laporan-reservasi-pdf', [            
        'users' => User::with('reservasis')->whereId(auth()->user()->id)->first(),
        ]);
        return $pdf->stream();
    }
}
