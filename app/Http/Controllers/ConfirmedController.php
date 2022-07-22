<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confirmed;
use App\Models\Reservation;
use App\Models\TemporaryModel;
use Illuminate\Support\Facades\Auth;

class ConfirmedController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            $reservations = Reservation::where('isConfirm', '=', 1)->get();
            return view('layout.reservation.confirmed', compact('reservations'));

         }
       
        else{
            return view('auth.login');
        } 
    }

    public function store(Request $request)
    {
        $confirmed = new Confirmed;

        $id = $request->input('id');
        $confirmed->full_name = $request->input('full_name');
        $confirmed->contact = $request->input('contact');
        $confirmed->email = $request->input('email');
        $confirmed->event_type = $request->input('event_type');
        $confirmed->event_date = $request->input('event_date');
        $confirmed->package = $request->input('package');
        $confirmed->persons = $request->input('persons');
        $confirmed->message = $request->input('message');
        $confirmed->save();
        $reservation=Reservation::find($id);
        $reservation->delete();

        return redirect()->route('confirmed.index');
    }
}
