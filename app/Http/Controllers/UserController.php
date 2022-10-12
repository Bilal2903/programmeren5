<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show($id){
        $user = User::find($id);
        $loggedInUser = Auth::user()->id;

        if ($user->id === $loggedInUser) {
            return view ('user.details',
            compact('user'));
        }else
        {
            return redirect(route('motor.index'));
        }
    }

    public function edit($id){

        $user = User::find($id);
        return view('user/edit', compact('id', 'user'));
    }

    public function update(Request $request, $id){

        $request ->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => Hash::make($request['password']),
        ]);

        $user = User::find($id);
        $user -> update($request -> all());
        $user -> save();

//        $formFields['user_id'] = auth()->id();

        return redirect(route('user.show', $user->id));
    }
}
