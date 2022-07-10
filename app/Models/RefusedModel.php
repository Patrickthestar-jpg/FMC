<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefusedModel extends Model
{
    protected $table = 'refused_reservation';
    public $timestamps = false;
    public $guarded =[];
}
