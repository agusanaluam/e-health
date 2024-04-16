<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $primaryKey = 'rekammedik';

    protected $fillable = [
        'rekammedik',
        'nik',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kotakab',
        'provinsi',
        'status',
        'agama',
        'pekerjaan',
        'golongan_darah',
        'no_hp',
    ];
}
