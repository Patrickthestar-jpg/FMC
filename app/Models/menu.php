<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $guarded;
    public function reservation(){
        return $this->belongsTo(Reservation::class,'reservation_id');
    }
}
