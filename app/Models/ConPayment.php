<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConPayment extends Model
{
    protected $table = 'confirmed_payment';
    public $timestamps = false;
    public $guarded =[];
}
