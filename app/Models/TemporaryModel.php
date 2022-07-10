<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryModel extends Model
{
    protected $table = 'temporary';
    public $timestamps = false;
    public $guarded =[];
}
