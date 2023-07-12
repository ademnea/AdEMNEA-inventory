<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compartments extends Model
{
    protected $table = 'Compartments';
    protected $fillable = [
        'number',
        'description',
    ];
    use HasFactory;
}
