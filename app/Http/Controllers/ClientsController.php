<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\User;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function __construct(){

        $users = User::all();

        $this->middleware('auth');
        return view('layouts.user-overzicht', compact(  'users'));

    }
}