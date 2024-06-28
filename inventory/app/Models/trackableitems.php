<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trackableitems extends Model
{

    protected $table = 'TrackableItems';
    use HasFactory;

    public function compartments()
    {
        return $this->belongsTo(compartments::class);
    }
}
