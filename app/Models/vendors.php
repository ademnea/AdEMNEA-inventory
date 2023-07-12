<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendors extends Model
{
    protected $table = 'vendors';
    protected $fillable = [
            'vendor_id',
            'name',
            'email',
            'phone', 
            'website',
            'location',
    ];
    use HasFactory;
}
