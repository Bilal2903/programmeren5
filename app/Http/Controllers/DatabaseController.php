<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    public function __construct()
    {
        $headTitle = 'All Motor Bikes';

        $motors = Motor::all();

        $this->middleware('auth');
        return view('/layouts/data', compact('headTitle', 'motors'));
    }
}
