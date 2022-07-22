<?php

namespace App\Http\Controllers;

use App\Models\FinishModel;
use Illuminate\Http\Request;
use App\Models\OngoingModel;
use Illuminate\Support\Facades\Auth;

class FinishController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            $ongoings = FinishModel::all();
            return view('layout.reservation.finished', compact('ongoings'));

         }
       
        else{
            return view('auth.login');
        } 
    }

    public function store(Request $request)
    {
        $ongoing = new FinishModel();
        $id = $request->input('id');
        $ongoing->full_name = $request->input('full_name');
        $ongoing->contact = $request->input('contact');
        $ongoing->email = $request->input('email');
        $ongoing->event_type = $request->input('event_type');
        $ongoing->event_date = $request->input('event_date');
        $ongoing->mode_payment = $request->input('mode_payment');
        $ongoing->refference = $request->input('refference');

        $ongoing->save();
        $pending=OngoingModel::find($id);
        $pending->delete();

        return redirect()->route('layout.reservation.finished');
    }
}
