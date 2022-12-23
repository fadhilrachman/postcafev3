<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disposisi extends Model
{
    use HasFactory;

    protected $table = "disposisis";
    protected $primaryKey = 'id_disp';
    // protected $guard = ["id_disp"];
    protected $fillable = ['no_agenda','petugas_id','jenis_surat','tanggal_kirim','no_surat','pengirim','tanggapan'];
}
