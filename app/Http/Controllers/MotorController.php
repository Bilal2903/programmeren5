<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    public function show() {

        $motor = Motor::all();

        return view('motorPage',
            compact("motor"));

    }
}
