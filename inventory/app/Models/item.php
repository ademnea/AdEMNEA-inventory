<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{

    protected $table = 'GeneralItems';
    use HasFactory;
    protected $fillable = [
        'category_id',
        'compartment_id',
        'name',
        'Type',
        'Quantity',
        'consignment_id'
    ];
}
