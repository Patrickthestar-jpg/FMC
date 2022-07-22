<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\package;
use App\Models\Reservation;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project.customize');
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
        $reservation = Reservation::create([
            'full_name'=>$request->full_name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'event_type'=>$request->event_type,
            'event_date'=>$request->event_date,
            'persons'=>$request->persons,
            'message'=>$request->message,
            'isCustomize'=>1,
        ])->id;
        $menu = menu::create([
            'reservation_id'=>$reservation,
            'pork'=>$request->pork,
            'chiken'=>$request->chiken,
            'vegitable'=>$request->vegitable,
            'beef'=>$request->beef,
            'sea_food'=>$request->sea_food,
            'diserts'=>$request->diserts,
        ]);
        return view('project.waiting');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(package $package)
    {
        //
    }
}
