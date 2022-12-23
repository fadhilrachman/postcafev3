<?php

namespace App\Http\Controllers;

use App\Models\disposisi;
use Illuminate\Http\Request;

class disposisisCtrl extends Controller
{
    function index(){
        // list data
        $data = [
            title => "disposisis",
            dtDis =>  disposisi::All()
        ];
        return view("disposisis.data",$data);
    }
    function form(Request $req) {
        // add data or edit

        $data = [
            "title" => "disposisis",
            dtDis => disposisi::where("id",$req)
        ];
    }
    function save(Request $req){

    }
    function delete($id){

    }
}
