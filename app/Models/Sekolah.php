<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Sekolah extends Model
{
    use HasFactory;

    protected $table = 'sekolah';

    protected $fillable = [
        'nama',
        'logo',
        'deskripsi',
        'alamat',
        'no_telepon',
        'sejarah_sekolah',
        'visi_misi',
        'nama_kepala_sekolah',
        'foto_kepala_sekolah',
        'periode_kepala_sekolah',
        'pesan_kepala_sekolah'
    ];
}
