@extends('layout.layout')

@section('content')
<a href="/data" class ="btn btn-info col-lg-offset-3">Back</a><br><br>
<div class="col-lg-4 col-lg-offset-4">
        <form class="form-horizontal" action="{{'/data/'.$data->id}}" method ="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
            <fieldset>
                <input type="text" name ="nama" value="{{$data->nama}}" class="form-control">
                <br \>
                {{ ($errors -> has('nama')) ? $errors->first('nama') : ' ' }} 
                <input type="text" name ="nis" value="{{$data->nis}}" class="form-control">
                <br \>
                {{ ($errors -> has('nis')) ? $errors->first('nis') : ' ' }} 
                <input type="text" name ="tempat_lahir" value="{{$data->tempat_lahir}}" class="form-control">
                <br \>
                {{ ($errors -> has('tempat_lahir')) ? $errors->first('tempat_lahir') : ' ' }} 
                <input type="date" name ="tgl_lahir"  class="form-control" value="{{$data->tgl_lahir}}">
                <br \>
                {{ ($errors -> has('tgl_lahir')) ? $errors->first('tgl_lahir') : ' ' }} 
                <input type="text" name ="sekolah_asal"  value="{{$data->sekolah_asal}}" class="form-control">
                <br \>
                {{ ($errors -> has('sekolah_asal')) ? $errors->first('sekolah_asal') : ' ' }}
                <input type="radio" name ="jenis_kelamin" value="{{$data->jenis_kelamin}}"> Laki - laki
                <input type="radio" name ="jenis_kelamin"  value="{{$data->jenis_kelamin}}"> Perempuan
                <br \><br>
                {{ ($errors -> has('jenis_kelamin')) ? $errors->first('jenis_kelamin') : ' ' }} 
                <input type="text" name ="jurusan_sekolah"  value="{{$data->jurusan_sekolah}}" class="form-control"> <br><br><br>
                {{ ($errors -> has('jurusan_sekolah')) ? $errors->first('jurusan_sekolah') : ' ' }}


                <button type="submit" class ="btn btn-success">Submit</button>
                   
            </fieldset>
        </form>
</div>
@endsection