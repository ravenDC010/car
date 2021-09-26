<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Car;
use App\User;


class CarController extends Controller
{
    public function index()
    {
        return view('addCar');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'number' => ['required', 'integer'],
            'seat' => ['required', 'integer'],
            'rent' => ['required', 'integer'],
        ]);

    //       dd(Auth::user()->agency->id);
    //     $id = Auth::user()->agency->id; 
    //          $mobile = User::find(1)->agency;
    //          dd($mobile);


//        return Car::create([
        Car::create([
            'agency_id' => Auth::user()->agency->id,
            'name' => request('name'),
            'number' => request('number'),
            'seat' => request('seat'),
            'rent' => request('rent')
        ]);

        return back()->with('success', 'Successfully inserted a new car!');

    }

}
