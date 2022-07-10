<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $events=Event::all();
        return view('project.index',compact('events'));
    }

    public function about()
    {
        return view('project.about');
    }

    public function contact()
    {
        return view('project.contact');
    }

    public function gallery()
    {
        return view('project.gallery');
    }

    public function wed()
    {
        return view('project.wed');
    }

    public function wedform()
    {
        return view('project.wedform');
    }

    public function agreement()
    {
        return view('project.agreement');
    }


}
