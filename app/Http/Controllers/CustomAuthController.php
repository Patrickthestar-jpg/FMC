<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.registration");
    }

    public function registeruser(Request $request)
    {
        $request->validate([
            'f_name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|max:12'
        ]);
        $user = New User;
        $user->f_name = $request->f_name;
        $user->email = $request->email;
        $user->password = FacadesHash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'You have registered successfuly!');
         } else {
            return back()->with('fail', 'Something wrong');
         }
        }

        public function loginuser(Request $request)
        {
            $validate = $request->validate([
                'email'=>'required|email',
                'password'=>'required|min:6|max:12'
            ]);

            if (Auth::attempt($validate)) {
                if (Auth::attempt(['email' => request()->email, 'password' => request()->password])){
                    return redirect()->route('layout.master_layout');
                }
            }

        }

    }
