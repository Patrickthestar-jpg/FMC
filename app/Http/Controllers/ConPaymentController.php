<?php

namespace App\Http\Controllers;

use App\Models\ConPayment;
use App\Models\OngoingModel;
use App\Models\PaymentForm;
use App\Models\TemporaryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConPaymentController extends Controller
{
    public function index()
    {
        $payments = ConPayment::all();
        return view('layout.payment.confirmedpayment', compact('payments'));
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
        $payment->mode_payment = $request->input('mode_payment');
        $payment->refference = $request->input('refference');
        $payment->save();
        $pending=ConPayment::find($id);
        $pending->delete();
        return redirect()->route('layout.payment.confirmedpayment');
    }
}
