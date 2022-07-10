<?php

namespace App\Http\Controllers;

use App\Models\RefusedModel;
use App\Models\Reservation;
use Illuminate\Http\Request;

class RefusedController extends Controller
{
    public function index()
    {
        $reservations = Reservation::where('isRefused', '=', 1)->get();

        return view('layout.reservation.refused', compact('reservations'));
    }
}
