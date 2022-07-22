<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageModel;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            $messages = MessageModel::all();
            return view('layout.message.message', compact('messages'));

         }
       
        else{
            return view('auth.login');
        } 
    }


    public function store(Request $request)
    {
        MessageModel::create(
            $request->all()
        );

        return redirect()->route('home.index');
    }
}
