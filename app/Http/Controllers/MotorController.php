<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    // Show all Bikes
    public function index() {

        $headTitle = 'All Motor Bikes';

        $motors = motor::all();

        return view('/layouts/motorPage',
            compact('headTitle', 'motors'));

//        return view('motor.index', [
//            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
//        ]);
    }

    // Show singel Bike
    public function show($id) {
        $details = Motor::find($id);
        return view('motor/detail', compact('id', 'details'));
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
            'tags' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Motor::create($formFields);

        return redirect('/motorPage')->with('message', 'Motor post created successfully!');

//        DD($request->all());

//        Motor::create($request->all());
//        return redirect(route('motor.create'))->with('success', 'bike is successfully saved');

//        $motor->user_id = Auth::user()->id;











    }

    public function destroy($id) {

        $motor = motor::find($id);
        $motor->delete();
        return redirect(route('motor.index'));
    }

    public function edit($id){

        $details = Motor::find($id);
        return view('motor.edit', compact('id', 'details'));
    }

    public function update(Motor $motor){

        $formFields = request()->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
            'horsepower' => 'required',
            'image' => 'nullable',
            'tags' => 'required',
        ]);

        $motor -> update($formFields);

//        $formFields['user_id'] = auth()->id();

        return redirect(route('motor.show', $motor->id));
    }

}
