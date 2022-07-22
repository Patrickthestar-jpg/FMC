<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\RefusedModel;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\TemporaryModel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            $reservations = Reservation::where('isConfirm', '=', 0)->get();
            return view('layout.reservation.pending', compact('reservations'));

         }
       
        else{
            return view('auth.login');
        } 
        
    }

    public function update($id)
    {
        $reservation = Reservation::where('id', '=', $id)->first()->update(['isConfirm' => 1]);
        return redirect()->route('confirmed.index');
    }
    public function store(Request $request)
    {
        $reservation = Reservation::create([
            'full_name'=>$request->full_name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'event_type'=>$request->event_type,
            'event_date'=>$request->event_date,
            'package'=>$request->package,
            'persons'=>$request->persons,
            'message'=>$request->message,
        ])->id;

        return view('project.waiting');
    }
    public function refused($id)
    {
        $reservation = Reservation::where('id', '=', $id)->first()->update(['isRefused' => 1]);

        return redirect()->route('layout.reservation.refused');
    }
    public function restore($id)
    {
        $reservation = Reservation::where('id', '=', $id)->first()->update(['isRefused' => 0]);

        return redirect()->route('layout.reservation.pending');
    }
}
