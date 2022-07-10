<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentForm;

class PaymentFormController extends Controller
{
    public function paymentform()
    {
        return view('layout.paymentform.paymentform');
    }

    public function pform()
    {
        return view('layout.paymentform.pform');
    }

    public function thank()
    {
        return view('layout.paymentform.thank');
    }

    public function store(Request $request)
    {
        PaymentForm::create(
            $request->all()
        );
        return redirect()->route('layout.paymentform.thank');
    }
}
