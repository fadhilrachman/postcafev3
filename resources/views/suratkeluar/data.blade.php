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
                  <tr>
                    <td>1</td>
                    <td>100</td>
                    <td>cuyy</td>
                    <td>pribadi</td>
                    <td>10-10-2002</td>
                    <td>2000</td>
                    <td>cuyy</td>
                    <td>loremasdoasdoa asdasdo</td>
                    <td>
                        <button class="btn btn-danger">delete</button>
                        <button class="btn btn-success">edit</button>
                    </td>
                  </tr>
                </tbody>
            </table>            
        </div>
    </div>

    <!-- ./col -->
  </div>
  <!-- /.row -->
@endsection
