<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PesertaPelatihan extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id_jurusan',
        'id_gelombang',
        'nama_lengkap',
        'nik',
        'kartu_keluarga',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'pendidikan_terakhir',
        'nama_sekolah',
        'kejuruan',
        'nomor_hp',
        'email',
        'aktivitas_saat_ini',
        'status',
        'deleted_at'
    ];

    public function jurusans(){
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }
    public function gelombangs() {
        return $this->belongsTo(Gelombang::class, 'id_gelombang');
    }
}
