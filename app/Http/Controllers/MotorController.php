<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Motor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MotorController extends Controller
{

    // dit zorgt ervoor dat je alle motors te zien krijgt op de motorPage
    public function __construct(){

        $headTitle = 'All Motor Bikes';

        $motors = Motor::all();

        $this->middleware('auth');
        return view('.layouts.data', compact('headTitle', 'motors'));

    }


    // Show all Bikes
    public function index() {

        $headTitle = 'All Motor Bikes';

        $motors = Motor::where('active', '=', '1')->get();

        $categories = Category::all();

        return view('/layouts/motorPage',
            compact('headTitle', 'motors', 'categories'));
    }

    // Show singel Bike
    public function show($id) {
        $details = Motor::find($id);
        return view('motor/detail', compact('id', 'details'));

    }


    //Function voor het aan maken van een motor post. Na dat je 2 of meer keer iets hebt gezocht via de searchbar.
    public function create(){

        if (Auth::user()->counter >=2){
            $categories = Category::all();
            return view('motor.create', compact('categories'));
        }else {

            $categories = Category::all();
            $motors = Motor::all();

            Session::flash('message', "Before you create a post, you have to search 2 or more posts with the searchbar.");
            return view('layouts.motorPage', compact('motors', 'categories'));
        }

    }


    // deze functie zorgt ervoor dat alles wordt opgeslagen na het invullen van de create
    public function store(Request $request){

        $formFields = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
            'horsepower' => 'required',
            'image' => 'required',
            'category' => 'required',
        ]);

        $formFields['user_id'] = Auth::user()->id;

        $formFields['category_id'] = $request->input('category');

        Motor::create($formFields);

        return redirect('/motorPage')->with('message', 'Motor post created successfully!');

    }

    //Dit zorgt ervoor dat je een post kan verwijderen.
    public function destroy($id) {

        $motor = motor::find($id);
        $motor->delete();

        return redirect(route('motor.index'));
    }

    //Dit zorgt ervoor dat je een post kan bewerken
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


    //Dit zorgt ervoor dat je een post kan opslaan na het bewerken
    public function update(Motor $motor){

        $formFields = request()->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
            'horsepower' => 'required',
            'image' => 'required',
        ]);

        $motor -> update($formFields);

        return redirect(route('motor.show', $motor->id));
    }

    //Function voor de active knop die is aangemaakt op de motor page
    public function active(Motor $motor)
    {
        $currentStatus = $motor->active;
        if ($currentStatus) {
            $status = false;
        }else {
            $status = true;
        }

        $motor->active = $status;
        $motor->save();

        return redirect(route('user.index'));

    }

}
