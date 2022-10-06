<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    public function show() {

        $headTitle = 'All Motor Bikes';

        $motors = Motor::all();

        return view('/layouts/motorPage',
            compact('headTitle', 'motors'));

    }

    public function create(){
        return view('motor.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'horsepower' => 'required',
            'image' => 'nullable',
        ]);

        motor::create($request->all());

        return redirect(route('motor.create'));

    }

    public function destroy($id) {

        $motor = motor::find($id);
        $motor->delete();
        return redirect(route('motor.index'));
    }

    public function edit($id){

        $motor = motor::find($id);

        return view(route('motor.edit'));
    }

    public function update(Request $request, $id){

        $motor = motor::find($id);

        return view(route('motor.edit'));
    }

}
