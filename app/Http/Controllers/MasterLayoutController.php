<?php

namespace App\Http\Controllers;

use App\Models\PaymentForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class MasterLayoutController extends Controller
{
    public function master_layout()
    {
        return view('layout.master_layout');
    }

    public function pending()
    {
        return view('layout.reservation.pending');
    }

    public function confirmed()
    {
        return view('layout.reservation.confirmed');
    }

    public function finished()
    {
        return view('layout.reservation.finished');
    }

    public function archived()
    {
        return view('layout.reservation.archived');
    }

    public function pendingpayment()
    {
        if (Auth::check()) {

            $payments = PaymentForm::all();
            return view('layout.payment.pendingpayment', compact('payments'));

         }
       
        else{
            return view('auth.login');
        } 
    
    }

    public function confirmedpayment()
    {
        return view('layout.payment.confirmedpayment');
    }

    public function confirmation()
    {
        return view('layout.payment.confirmation');
    }

}
