<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Data::all();
        return view('data.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request, [
            'nama' => 'required',
            'nis' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'sekolah_asal' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan_sekolah' => 'required'
        ]);
        // $data=$request->all();
        // dd($data);
        $data = new data;

        $data->nama = $request->nama;
        $data->nis = $request->nis;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->sekolah_asal = $request->sekolah_asal;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->jurusan_sekolah= $request->jurusan_sekolah;
       
        $data->save();
        return redirect('data')-> with('message', 'data telah ditambahkan');
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
        $data = data::find($id);
        return view('data.edit',compact('data'));
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
        $this ->validate($request, [
            'nama' => 'required',
            'nis' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'sekolah_asal' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan_sekolah' => 'required'
        ]);
       
        $data = data::find($id);

        $data->nama = $request->nama;
        $data->nis = $request->nis;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->sekolah_asal = $request->sekolah_asal;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->jurusan_sekolah= $request->jurusan_sekolah;
       
        $data->save();
        return redirect('data')-> with('message', 'data telah ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =data::find($id);
        $data->delete();
        session()->flash('message','Deleted Successfully');
        return redirect('/data');
    }
}
