<?php

namespace App\Imports;

use App\Models\item;
use Maatwebsite\Excel\Concerns\ToModel;

class itemImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new item([
            'category_id' => $row[0],
            'compartment_id' => $row[1],
            'consignment_id' => $row[2],
            'name' => $row[3],
            'Type' => $row[4],
            'Quantity' =>$row[5],
        ]);
    }
}
