<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Car;
use App\CustomerCar;

class ViewCarController extends Controller
{
    public function index()
    {
        $car = Car::orderBy('name')->get();
        return view('welcome', ['Cars' => $car]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'day' => ['required', 'integer'],
        ]);

        
    //       dd(Auth::user()->agency->id);
    //     $id = Auth::user()->agency->id; 
    //          $mobile = User::find(1)->agency;
    //          dd($mobile);


//        return Car::create([
        CustomerCar::create([
            'customer_id' => Auth::user()->customer->id,
            'car_id' => request('car'),
            'start_date' => date('Y-m-d'),
            'day' => request('day'),
        ]);


        return back()->with('success', 'Successfully rented a car!');

    }

}
