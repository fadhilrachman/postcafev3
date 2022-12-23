<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disposisi extends Model
{
    protected $table = "disposisis";
    protected $guard = ["id"];
    protected $fillable = ['no_agenda','petugas_id','jenis_surat','tanggal_kirim','no_surat','pengirim','tanggapan'];
}
