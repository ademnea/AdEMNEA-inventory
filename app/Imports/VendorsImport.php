<?php

namespace App\Imports;

use App\Models\vendors;
use Maatwebsite\Excel\Concerns\ToModel;

class VendorsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         
        return new vendors([
            'name' => $row[0],
            'email' => $row[1],
            'phone' => $row[2],
            'website' => $row[3],
            'location' => $row[4],
        ]);
    }
}
				