<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consignments extends Model
{   
    protected $table = 'Consignments';
    protected $fillable = [
            'vendor_id' ,
            'DateBought' ,
            'receiptNo',
            'DateReceived', 
            'receipt_image_url',
    ];

    use HasFactory;
}
