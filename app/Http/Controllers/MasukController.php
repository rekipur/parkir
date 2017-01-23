<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Html\Builder;
use App\Masuk;
use Session;
use Auth;
use Illuminate\Support\Facades\DB;

class MasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        //
        if ($request->ajax()) {
            # code...
            $masuks = Masuk::with('jenis');
            return Datatables::of($masuks)
            ->addColumn('aksi', function($masuk) {
                return view('datatable._masuk', [
                        'model'=>$masuk,
                        'form_url'=>route('masuk.destroy', $masuk->id),
                        'confirm_message' => 'Yakin Mau Menghapus Data ' . $masuk->kode_parkir . '?'
                    ]);

            })->make(true);
        }
            $html = $htmlBuilder
            ->addColumn(['data'=>'kode_parkir','name'=>'kode_parkir','title'=>'Kode Parkir'])
            ->addColumn(['data'=>'jenis.nama','name'=>'jenis','title'=>'Jenis Kendaraan'])
            ->addColumn(['data'=>'petugas_input', 'name'=>'petugas_input', 'title'=>'Petugas Input'])
            ->addColumn(['data'=>'created_at','name'=>'created_at','title'=>'Waktu Masuk'])
            ->addColumn(['data'=>'keterangan', 'name'=>'keterangan', 'title'=>'Keterangan'])
            ->addColumn(['data'=>'aksi','name'=>'aksi','title'=>'Pilihan','searchable'=>false,'orderable'=>false]);

            return view('masuk.index')->with(compact('html'));
        
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

    public function ajax(Request $request)
    {
        //
        if ($request->ajax()) {
            # code...
            $jenis       = $request->jenis;
            $kode_parkir = $request->kode_parkir;
            $keterangan  = $request->keterangan;
            $petugas_input = Auth::user()->name;

            $masuk = Masuk::create([
                    'jenis' => $jenis,
                    'kode_parkir' => $kode_parkir,
                    'keterangan' => $keterangan,
                    'petugas_input' => $petugas_input,
                ]);
        }
    }

    public function cek(Request $request)
    {
        //
        if ($request->ajax()) {
            # code...
            $kode       = $request->kode;
            $user = DB::table('masuks')->where('kode_parkir', $kode)->first();
            return $user->kode_parkir;
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        $masuk = Masuk::find($id);
        $masuk->delete();

                Session::flash("flash_notification", [
                    "level"=>"danger",
                    "message"=>"Data telah Dihapus"
                ]);
        return redirect()->route('masuk.index');
    }
}
