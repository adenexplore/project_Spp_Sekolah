<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswa([
            'nisn' => $row[1],
            'nis' => $row[2], 
            'nama' => $row[3], 
            'alamat' => $row[4], 
            'no_telp' => $row[5], 
            'id_spp' => $row[6], 
            'id_kelas' => $row[7], 
        ]);
    }
}
