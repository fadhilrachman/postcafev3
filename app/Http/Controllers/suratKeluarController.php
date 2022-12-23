<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\surat_keluars;
class suratKeluarController extends Controller
{
    //

    public function get(){
        // $data = [
            
        //     {
        //         id:1,
        //         no_agenda:2000,
        //         petugas:'cuyy',
        //         jenis_surat:'surat pribadi', 
        //         tanggal:20-10-2022,
        //         no_surat:2099,
        //         pengirim:'cuyy',
        //         perihal:'kepada yhsdidsnid'
        //     }
        // ];
        // dd($data);
        return view('suratkeluar.data');
    }
}
