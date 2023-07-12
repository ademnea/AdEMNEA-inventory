<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{

    protected  $table = 'generalitems';
    protected $fillable = [
        'item_id',
        'category_id',
        'compartment_id',
        'consignment_id',
        'name',
        'Type',
        'Quantity',
        
    ];
    use HasFactory;
}
