<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    public function show() {

        $headTitle = 'All Motor Bikes';

        $motors = motor::all();

        return view('/layouts/motorPage',
            compact('headTitle', 'motors'));

    }

    public function create(){
        return view('motor.create');
    }


    public function store(Request $request){

        $formFields = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
            'horsepower' => 'required',
            'image' => 'nullable',
        ]);

        $formFields['user_id'] = auth()->id();

        Motor::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');

//        DD($request->all());

//        Motor::create($request->all());
//        return redirect(route('motor.create'))->with('success', 'bike is successfully saved');

//        $motor->user_id = Auth::user()->id;











    }

    public function destroy($id) {

        $motor = motor::find($id);
        $motor->delete();
        return redirect(route('motor.show'));
    }

    public function edit($id){

        $motor = motor::find($id);

        return view(route('motor.edit'), compact('motor'));
    }

    public function update(Request $request, $id){

        $motor = motor::find($id);

        return view(route('motor.edit'), compact('motor'));
    }

}
