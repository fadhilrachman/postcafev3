@extends('layouts.template')

@section("title","Dashboard")
@section("page-title","Dashboard")

@section('content')
<!-- Small boxes (Stat box) -->
   
    <!-- ./col -->
    <div class="card row">
        <div class="card-header">
            <div class="card-title">
                <a class="btn btn-block btn-primary btn-sm" href="">Add New</a>
            </div>
        </div>
        <div class="card-body">
            <table id="dtCustomer" class="dtTable table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>No Agenda</th>
                    <th>Petugas</th>
                    <th>Jenis Surat</th>
                    <th>Tanggal</th>
                    <th>No Surat</th>
                    <th>Pengirim</th>
                    <th>Perihal</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($dtDis as $key=> $rsdis)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$rsdis->no_agenda}}</td>
                        <td>{{$rsdis->nama}}</td>
                        <td>{{$rsdis->jenis_surat}}</td>
                        <td>{{$rsdis->tanggal_kirim}}</td>
                        <td>{{$rsdis->no_surat}}</td>
                        <td>{{$rsdis->pengirim}}</td>
                        <td>{{$rsdis->tanggapan}}</td>
                        <td>
                            <button class="btn btn-danger">delete</button>
                            <a class="btn btn-success" href="disposisis/edit/{{$rsdis->id_disp}}">edit</a>
                        </td>
                      </tr>
                @endforeach
               
                </tbody>
            </table>            
        </div>
    </div>

    <!-- ./col -->
  </div>
  <!-- /.row -->
@endsection
