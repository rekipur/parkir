<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis_kendaraan as JK;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Html\Builder;
use Session;

class JkendaraanController extends Controller
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
            $jks = JK::select(['id','nama','deskripsi']);
            return Datatables::of($jks)
            ->addColumn('aksi', function($jk){
                return view('datatable._aksi',[
                    'model' => $jk,
                    'form_url' => route('jenis_kendaraan.destroy', $jk->id),
                    'edit_url' => route('jenis_kendaraan.edit', $jk->id),
                    'confirm_message' => 'Yakin mau mengahapus ' . $jk->nama . '?'
                    ]);
            })->make(true);
        }

        $html = $htmlBuilder
        ->addColumn(['data'=>'nama','name'=>'nama', 'title'=>'Nama Jenis Kendaraan'])
        ->addColumn(['data'=>'deskripsi','name'=>'deskripsi', 'title'=>'Deskripsi'])
        ->addColumn(['data'=>'aksi', 'name'=>'aksi', 'title'=>'Pilihan', 'searchable'=>false,'orderable'=>false]);
        return view('jenis_kendaraan.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jenis_kendaraan.create');
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
        $this->validate($request,[   
                'nama'=>'required|max:255|unique:jenis_kendaraans,nama,',
                'deskripsi'=>'max:255'
            ]);
        $jk = JK::create($request->only(['nama', 'deskripsi']));
                Session::flash("flash_notification", [
                    "level"=>"success",
                    "message"=>"Jenis Kendaraan Telah Ditambahkan"
                ]);

        return redirect()->route('jenis_kendaraan.index');
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
        $jk = Jk::find($id);

        return view('jenis_kendaraan.edit')->with(compact('jk'));
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
        $this->validate($request,[   
                'nama'=>'required|max:255|unique:jenis_kendaraans,nama,'.$id,
                'deskripsi'=>'max:255'
            ]);
        $jk = JK::find($id);

        $jk->update($request->only(['nama', 'deskripsi']));

                Session::flash("flash_notification", [
                    "level"=>"success",
                    "message"=>"Jenis Kendaraan telah diperbaharui"
                ]);

        return redirect()->route('jenis_kendaraan.index');
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
        $jk = JK::find($id);
        $jk->delete();

                Session::flash("flash_notification", [
                    "level"=>"danger",
                    "message"=>"Jenis Kendaraan telah Dihapus"
                ]);
        return redirect()->route('jenis_kendaraan.index');
    }
}
