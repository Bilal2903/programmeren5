<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MotorController extends Controller
{
    public function __construct(){

        $headTitle = 'All Motor Bikes';

        $motors = Motor::all();

        $this->middleware('auth');
        return view('.layouts.data', compact('headTitle', 'motors'));

    }


    // Show all Bikes
    public function index() {

        $headTitle = 'All Motor Bikes';

        $motors = motor::all();

        return view('/layouts/motorPage',
            compact('headTitle', 'motors'));
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
            'image' => 'required',
            'tags' => 'required',
        ]);

        $formFields['user_id'] = Auth::user()->id;

        Motor::create($formFields);

        return redirect('/motorPage')->with('message', 'Motor post created successfully!');

    }

    public function destroy($id) {

        $motor = motor::find($id);
        $motor->delete();

        return redirect(route('motor.index'));
    }

    public function edit($motorId){

        $details = Motor::find($motorId);

        if ($details->user_id === Auth::id()){
            return view ('motor.edit',
                compact('details'));
        }else
        {
            return redirect(route('motor.index'));
        }
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

        return redirect(route('motor.show', $motor->id));
    }

}
