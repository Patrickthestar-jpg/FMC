<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinishModel extends Model
{
    protected $table = 'finished_reservation';
    public $timestamps = false;
    public $guarded =[];
}
