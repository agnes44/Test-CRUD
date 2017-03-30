@extends('layout.layout')

@section('content')
<div class="form-group row add">
       <div class="form-group">
            <div class="col-md-2" >
                 <a href="/data/create" class ="btn btn-info">Add New</a>
            </div>
       </div>
               
</div>

<div class="task-content">
    <div class="row">
        <div class="table-responsive">
            <table class="table table-borderless" id ="table">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Nama Sekolah</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan Sekolah</th>
                    <th>Action</th>
                </tr>
                 {{ csrf_field() }}

                <?php $no=1; ?>
                @foreach ($datas as $data)
                    <tr class="item{{$data->id}}">
                        <td>{{$no++}}</td>
                        <td>{{($data->nama)}}</td>
                        <td>{{$data->nis}}</td>
                        <td>{{$data->tempat_lahir}}</td>
                        <td>{{$data->tgl_lahir}}</td>
                        <td>{{$data->sekolah_asal}}</td>
                        <td>{{$data->jenis_kelamin}}</td>
                        <td>{{$data->jurusan_sekolah}}</td>
                        <td>
                            <a href="{{'/data/'.$data->id.'/edit'}}">
                                <button class="btn btn-primary"> Edit</button>
                            </a>
                        <form method ="post" action ="{{'/data/'.$data->id}}" class="pull-right hidden-phone">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>          
    </div>
@stop