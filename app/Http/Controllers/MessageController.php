<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageModel;

class MessageController extends Controller
{
    public function index()
    {
        $messages = MessageModel::all();
        return view('layout.message.message', compact('messages'));
    }


    public function store(Request $request)
    {
        MessageModel::create(
            $request->all()
        );

        return redirect()->route('home.index');
    }
}
