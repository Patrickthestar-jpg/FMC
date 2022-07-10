<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';
    public $timestamps = false;
    public $guarded =[];
    public function menus(){
        return $this->hasMany(menu::class,'reservation_id');
    }
}
