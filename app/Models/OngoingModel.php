<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OngoingModel extends Model
{
    protected $table = 'ongoing_reservation';
    public $timestamps = false;
    public $guarded =[];
}
