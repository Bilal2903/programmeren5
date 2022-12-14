<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    //Dit zorgt ervoor dat je je eigen gemaakte posts kan zien en CRUD erop kan toepassen.
    public function index()
    {
        $motors = Auth::user()->motors;
        return view('layouts.data', compact('motors'));
    }

    //Dit zorgt ervoor dat een user zijn eigen gegevens kan zien op de details pagina.
    public function show(User $user){

        if ($user = Auth::user()){
             return view ('user.details', compact('user'));
        }else {
            return redirect(route('motor.index'));
        }

    }

    //Dit zorgt ervoor dat een user zijn gegevens kan veranderen
    public function edit($id){
        $user = User::find($id);
        return view('user/edit', compact('id', 'user'));
    }

    //Dit zorgt ervoor dat de user zijn bewerkte gegevens kan updaten om ze te behouden.
    public function update(Request $request, $id){

        $request ->validate([
            'name' => 'required|max:255',
            'email' => 'required',
        ]);

        $user = User::find($id);
        $user -> update($request -> all());
        $user -> save();

        return redirect(route('user.show', $user->id));
    }
}
