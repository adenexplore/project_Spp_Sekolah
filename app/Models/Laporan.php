<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';
    protected $fillable = ['nama_kelas', 'kompetensi_keahlian','id_spp','id_petugas','bulan_bayar','tahun_bayar','bulan_bayar','alamat'];
}

