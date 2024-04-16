<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;
    protected $table = 'pelayanan';
    protected $primaryKey = 'invoice';

    protected $fillable = [
        'invoice',
        'rekammedik',
        'kode_poli',
        'tanggal_kunjungan',
        'waktu_kunjungan',
        'tarif',
        'biaya_tambahan',
        'status_bayar',
    ];
}
