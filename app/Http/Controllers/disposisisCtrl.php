<?php

namespace App\Http\Controllers;

use App\Models\disposisi;
use Illuminate\Http\Request;

class disposisisCtrl extends Controller
{
    function index(){
        // list data
        $data = [
        //     title => "disposisis",
            'dtDis' =>  disposisi::All()
        ];
        return view("disposisis.data",$data);
    }
    function form(Request $req) {
        // add data or edit

        $data = [
            "title" => "disposisis",
            'dtDis' => disposisi::where("id",$req)
        ];
        
        return view('disposisis.form');
     

    }
    function save(Request $request,){
        // dd($request);
        // if ($id) {
        //     $disposisi = disposisi::find($id);
        //     $disposisid->update([
        //         'no_agenda' => $request->no_agenda,
        //         'petugas_id' => $request->petugas_id,
        //         'jenis_surat' => $request->jenis_surat,
        //         'tanggal_kirim' => $request->tanggal_kirim,
        //         'no_surat' => $request->no_surat,
        //         'pengirim' => $request->pengirim,
        //         'tanggapan' => $request->tanggapan,
        //     ]);
            # code...
        // }else{
            disposisi::create([
                'no_agenda' => $request->no_agenda,
                'petugas_id' => $request->petugas_id,
                'jenis_surat' => $request->jenis_surat,
                'tanggal_kirim' => $request->tanggal_kirim,
                'no_surat' => $request->no_surat,
                'pengirim' => $request->pengirim,
                'tanggapan' => $request->tanggapan,
            ]);
        // }

    }
    function delete($id){

    }
}
