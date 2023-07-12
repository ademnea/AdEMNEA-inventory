<?php

namespace App\Imports;

use App\Models\consignments;
use Maatwebsite\Excel\Concerns\ToModel;


class consignmentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new consignments([
        
            'vendor_id' => $row[0],
            'DateBought' => $row[1],
            'receiptNo' => $row[2],
            'DateReceived' => $row[3],
            'receipt_image_url' => $row[4],

        ]);
    }
}
				