<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        if (Auth::check()) {

            $gallery = Gallery::all();
            return view('gallery.admingallery')->with('gallery', $gallery);

         }
       
        else{
            return view('auth.login');
        } 
        
    }

    public function display()
    {
        $e = 'Event';
        $f = 'Food';
        $gallery = Gallery::where('type', '=', $e)->get();
        $food = Gallery::where('type', '=', $f)->get();
        return view('project.gallery')->with('gallery', $gallery)->with('food', $food);
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
            $file_extention = $request->file('file')->getClientOriginalExtension();
            $file_name = time().rand(99,999).'file.'.$file_extention;
            $path = $request->file('file')->move('users\image',$file_name);


           $save = new Gallery;

        //    $save->name = $name;
           $save->picture = $path;
           $save->caption = $request->input('caption');
           $save->type = $request->input('type');

           $save->save();


           return redirect('admin-gallery')->with('status', 'Image Has been uploaded');

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect('admin-gallery')->with('message', 'Image Has been deleted');

    }
}
