<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //Search bar -> function that alows
    public function index(Request $request) {

        $searchedBike = $request->input('search');

        $motors = Motor::latest() ->where('Name', 'like', '%' . $searchedBike . '%')
            ->orWhere('price', 'like', '%' . $searchedBike . '%')
            ->orWhere('description', 'like', '%' . $searchedBike . '%')
            ->orWhere('horsepower', 'like', '%' . $searchedBike . '%')
            ->orWhere('image', 'like', '%' . $searchedBike . '%')
        ->get();

        return view('/layouts/motorPage',
            compact( 'motors', 'searchedBike'));
    }

    public function show (Motor $motor) {

        return view('/layouts/motorPage',
            compact( 'motor'));
    }
}
