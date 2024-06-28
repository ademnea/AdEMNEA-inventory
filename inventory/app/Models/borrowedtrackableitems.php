<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class borrowedtrackableitems extends Model
{
    protected $table = 'BorrowedTrackableItems';
    use HasFactory;

    public function order()
{
    return $this->belongsTo(borrow::class);
}

}
