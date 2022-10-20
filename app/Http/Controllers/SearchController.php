<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Motor;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //Search bar -> function that allows
    public function index(Request $request) {

        $searchedBike = $request->input('search');

        if ($request->has('search')) {
            $motors = Motor::where('Name', 'like', '%' . $searchedBike . '%')
                ->orWhere('price', 'like', '%' . $searchedBike . '%')
                ->orWhere('description', 'like', '%' . $searchedBike . '%')
                ->orWhere('horsepower', 'like', '%' . $searchedBike . '%')
                ->orWhere('image', 'like', '%' . $searchedBike . '%')
            ->get();

        }elseif ($request->has('category')) {
            $motors = Motor::where('category_id', '=', $request->query('category'))->get();
        }else{
            $motors = Motor::all();
        }

        $categories = Category::all();


        return view('/layouts/motorPage',
            compact( 'motors', 'searchedBike', 'categories'));

    }
}
