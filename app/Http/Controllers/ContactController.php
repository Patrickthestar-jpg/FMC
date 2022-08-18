<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Message;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {

            $contact = Contact::first();
            return view('contact.contact')->with('contact', $contact);

         }
       
        else{
            return view('auth.login');
        } 
    }

    public function display()
    {
        $contact = Contact::first();
        return view('project.contact')->with('contact', $contact);

    }

    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {
        
            $m = Message::where('message', 'LIKE', '%'.$message.'%')->pluck('message')->first();
            $r = message::where('message', '=', $m)->pluck('reply')->first();


            if ($message == 'hi') {
                $botman->reply("Here are the instructions in using our auto reply bot: Type 'Packages' to see information about packages. Type 'Location' to see if we extend our services to your location.");
                
            } 
           else if ($message == $m) {
                $botman->reply($r);    
            } 
            else {
                $botman->reply("write 'hi' for instructions...");
            }
        });

        $botman->listen();
    }

    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function (Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you ' . $name);
        });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //Find the$contact using the Product model and its ID.
        $contact = Contact::find($id);
        //Assign values using the field names from the HTML form
        $contact->name = $request->input('name');
        $contact->contact_no= $request->input('contact_no');
        $contact->address = $request->input('address');
        $contact->socmed = $request->input('socmed');

        $contact->save();

        return redirect()->route('admin-contact')->with('message', 'Contact updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
