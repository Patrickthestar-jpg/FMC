<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirmed extends Model
{
    protected $table = 'confirmed_reservations';
    public $timestamps = false;
    public $guarded =[];
}
