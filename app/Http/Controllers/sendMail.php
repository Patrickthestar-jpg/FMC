<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Confirmed;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;

class sendMail extends Controller
{
    public function mail($id)
    {
        $name = 'FMC Catering';
        $user = Reservation::find($id);


        Mail::to($user->email)->send(new WelcomeMail($name));

        return redirect('confirmed')->with('message', 'Email Sent Successfuly');

    }
}
