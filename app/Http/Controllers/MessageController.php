<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            $message = Message::all();
            return view('messages.autorep')->with('message', $message);

         }
       
        else{
            return view('auth.login');
        } 
    }


    public function store(Request $request)
    {
        $save = new Message;


           $save->message = $request->input('message');
           $save->reply = $request->input('reply');

           $save->save();

           return redirect()->route('autorep')->with('status', 'Autoreply has been added');
    }

    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect()->route('autorep')->with('message', 'Autoreply has been deleted');

    }
}
