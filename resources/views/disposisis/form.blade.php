@extends('layouts.template')


@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="/disposisis/save" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="cat_nm">No Agenda</label>
                        {{-- <input type="hidden" name="id_cat" value="{{ @$rsCat->id }}"> --}}
                        <input type="number" class="form-control @error('no_agenda') is-invalid @enderror" name="no_agenda" id="no_agenda" placeholder="No Agenda" value="{{ old('no_agenda') }}">
                        @error('no_agenda')
                            <div id="no_agenda" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cat_nm">Petugas</label>
                        {{-- <input type="hidden" name="id_cat" value="{{ @$rsCat->id }}"> --}}
                        <select name="petugas_id"  class="form-control @error('petugas_id') is-invalid @enderror"  id="">
                        @forelse ($user as $item)
                        <option value="">Petugas</option>
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                        @empty
                            <option value="">Tidak ada petugas</option>
                        @endforelse
                        </select>
                        @error('petugas_id')
                            <div id="petugas_id" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="Jenis_surat">Jenis Surat</label>
                        {{-- <input type="hidden" name="id_cat" value="{{ @$rsDis->id }}"> --}}
                        <input type="text" class="form-control @error('jenis_surat') is-invalid @enderror" name="jenis_surat" id="jenis_surat" placeholder="Penting,Pribadi" value="{{ @$rsDis->jenis_surat }}">
                        @error('jenis_surat')
                            <div id="jenis_surat" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        {{-- <input type="hidden" name="id_cat" value="{{ @$rsDis->id }}"> --}}
                        <input type="date" class="form-control @error('tanggal_kirim') is-invalid @enderror" name="tanggal_kirim" id="tanggal_kirim" placeholder="Nama Category" value="{{ @$rsDis->tanggal_kirim }}">
                        @error('tanggal_kirim')
                            <div id="tanggal_kirim" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">

                        <label for="cat_nm">No Surat</label>
                        {{-- <input type="hidden" name="id_cat" value="{{ @$rsCat->id }}"> --}}
                        <input type="number" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat" id="no_surat" placeholder="20020234" value="{{ @$rsCat->no_surat }}">
                        @error('no_surat')
                            <div id="no_surat" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pengirim">Pengirim</label>
                        {{-- <input type="hidden" name="id_cat" value="{{ @$rsCat->id }}"> --}}
                        <input type="text" class="form-control @error('pengirim') is-invalid @enderror" name="pengirim" id="pengirim" placeholder="Nama Pengirim" value="{{ @$rsDis->pengirim }}">
                        @error('pengirim')
                            <div id="pengirim" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggapan">Tanggapan</label>
                        {{-- <input type="hidden" name="id" value="{{ @$rsDis->id }}"> --}}
                        <input type="text" class="form-control @error('tanggapan') is-invalid @enderror" name="tanggapan" id="tanggapan" placeholder="Surat" value="{{ @$rsDis->tanggapan }}">
                        @error('tanggapan')
                            <div id="tanggapan" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="SAVE">
                    </div>
                </form>        
            </div>
        </div>
    </div>
</div>    
</div>
@endsection
