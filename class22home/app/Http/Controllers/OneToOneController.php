<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class OneToOneController extends Controller
{
    function index() {
        // $users = User::with('profile')->get(); // egar log
        // $users = User::get();
        // $users-> load('profile'); // lag load

        // $users = User::whereHas('profile', function ($q) {
        //     return $q->where('zip_code', '>', 200);
        // })->get();
        // $users = User::whereHas('profile', function ($q) {
        //     return $q->whereNotNull('zip_code');
        // })->get();

        // $users = User::doesntHave('profile')->get();

        // $users = User::whereDoesntHave('profile', function ($q) {
        //     return $q->where('name', 'like', '%a');
        // })->get();
        // return view('relationship.one-to-one', compact('users'));

        ### The Tnd user to profile  Relationship ###

        // add auser profile data
        // return User::find(10)->profile()->create([
        //     'address' => 'Bogora',
        //     'zip_code' => 159,
        //     'phone' => 789456
        // ]);

        $profiles = Profile::get();
        return view('relationship.one-to-one', compact('profiles'));

        ### The Tnd profile to user Relationship ###
    }
}
