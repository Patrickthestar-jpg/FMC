<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentForm extends Model
{
    protected $table = 'payment_form';
    public $timestamps = false;
    public $guarded =[];
}
