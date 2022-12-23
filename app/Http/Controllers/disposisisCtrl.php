<?php

namespace App\Http\Controllers;

use App\Models\disposisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class disposisisCtrl extends Controller
{
    function index(){
        // list data
        $data = [
            
        //     title => "disposisis",
            'dtDis' =>  disposisi::get()
        ];
        
        return view("disposisis.data",$data);
    }
    function form(Request $req) {
        // add data or edit

        $data = [
            "title" => "disposisis",
            // 'dtDis' => disposisi::where("id",$req)
            'user'=>DB::table('users')->get()
        ];
    
        return view('disposisis.form',$data);
     

    }
    function save(Request $request){
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
            $request->validate([
                    'no_agenda' => 'required',
                    'petugas_id' => 'required',
                    'jenis_surat' => 'required',
                    'tanggal_kirim' => 'required',
                    'no_surat' => 'required',
                    'pengirim' => 'required',
                    'tanggapan' => 'required',
                ]);
            disposisi::create([
                'no_agenda' => $request->no_agenda,
                'petugas_id' => $request->petugas_id,
                'jenis_surat' => $request->jenis_surat,
                'tanggal_kirim' => $request->tanggal_kirim,
                'no_surat' => $request->no_surat,
                'pengirim' => $request->pengirim,
                'tanggapan' => $request->tanggapan,
            ]);
            return redirect('/disposisis');
        // }

    }
    function delete($id){
        $data = disposisi::where('id_disp',$id)->first();

        $data->delete();
        return redirect('/disposisis');
    }

    function halamanEdit($id_disp){
        $data = disposisi::where('id_disp',$id_disp)->first();
        $user = DB::table('users')->get();
        // dd($data);
        return view('disposisis.edit',['data'=>$data,'user'=>$user]);
    }
    
    function edit(Request $request, $id_disp){
        // dd($id_disp);
        $request->validate([
            'no_agenda' => 'required',
            'petugas_id' => 'required',
            'jenis_surat' => 'required',
            'tanggal_kirim' => 'required',
            'no_surat' => 'required',
            'pengirim' => 'required',
            'tanggapan' => 'required',
        ]);
       $data =  disposisi::where('id_disp',$id_disp)->first();
       $data->update($request->all());
        return redirect('/disposisis');
    }
}
