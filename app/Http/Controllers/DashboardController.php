<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confirmed;
use App\Models\Confirmed as ModelsConfirmed;

class DashboardController extends Controller
{

     public function __construct()
     {
         $this->middleware('auth');
    }
    public function index()
    {
        $confirmed_reservations = ModelsConfirmed::count();
        return view('layout.dashboard.index',compact('confirmed_reservations'));
    }
}
