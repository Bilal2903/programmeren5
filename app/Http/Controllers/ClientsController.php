<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ClientsController extends Controller
{
//dit zorgt ervoor dat er een User overzicht wordt weer gegeven op de Users page
    public function __construct(){


        if (Auth::user() && Auth::user()->is_admin){

            $users = User::all();

            $this->middleware('auth');
            return view('layouts.user-overzicht', compact('users'));
        }
        else {

            Session::flash('message', "ERROR: You are NOT an Admin");
            return redirect(route('motor.index'));
        }

//        $users = User::all();
//
//        $this->middleware('auth');
//        return view('layouts.user-overzicht', compact(  'users'));

    }
}
