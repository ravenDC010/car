<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\CustomerCar;

class CustomerCarController extends Controller
{
    public function index()
    {
        $car = CustomerCar::select('car_id')->groupBy('car_id')->get();
        return view('viewBookedCars', ['CustomerCars' => $car]);
    }

    public function viewCustomers(Request $request, $id)
    {
        $bookedCustomer = CustomerCar::where('car_id', '=', $id)->get();
        return view('viewCustomers', ['BookedCustomers' => $bookedCustomer]);
    }


}
