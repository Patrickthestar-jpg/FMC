<?php

namespace App\Http\Controllers;

use App\Models\RefusedModel;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RefusedController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            $reservations = Reservation::where('isRefused', '=', 1)->get();
            return view('layout.reservation.refused', compact('reservations'));

         }
       
        else{
            return view('auth.login');
        } 

    }
}
