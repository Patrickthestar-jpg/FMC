<?php

namespace App\Http\Controllers;

use App\Models\ConPayment;
use Illuminate\Http\Request;
use App\Models\OngoingModel;
use Illuminate\Support\Facades\Auth;

class OngoingController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            $payments = OngoingModel::all();
            return view('layout.reservation.ongoing', compact('payments'));

         }
       
        else{
            return view('auth.login');
        } 
    }

    public function store(Request $request)
    {
        $payment = new OngoingModel();
        $id = $request->input('id');
        $payment->full_name = $request->input('full_name');
        $payment->contact = $request->input('contact');
        $payment->email = $request->input('email');
        $payment->event_type = $request->input('event_type');
        $payment->event_date = $request->input('event_date');
        $payment->persons = $request->input('persons');
        $payment->message = $request->input('message');

        $payment->save();
        $pending=ConPayment::find($id);
        $pending->delete();

        return redirect()->route('layout.payment.confirmedpayment');
    }
}
