<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Motor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    //Search bar -> function that allows
    public function index(Request $request) {

        $searchedBike = $request->input('search');

        $this->counter();

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

    public function counter(){
        $user_id = Auth::id();
        $user = User::find($user_id);
        $nummerTeller = $user->counter;
        $recentTeller = $nummerTeller + 1;
        $user->counter = $recentTeller;
        $user->save();
    }
}
