<?php

namespace App\Imports;

use App\Detail;
use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Detail([
            'user_id' => $row[1],
            'nama' => $row[2], 
            'alamat' => $row[3], 
        ]);
    }
}
