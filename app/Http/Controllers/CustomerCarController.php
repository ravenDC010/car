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
        // $userAgency = Auth::user()->agency->id;
         $car = CustomerCar::orderBy('car_id')->get();
        //  dd($car);
        // dd(Auth::user());
        // $car = DB::table('CustomerCar')
        //         ->join('Car','CustomerCar.car_id','=','Car.id')
        //         ->join('Customer','CustomerCar.customer_id','=','Customer.id')
        //         ->select('CustomerCar.day' , 'CustomerCar.start_date' , 'Car.name', 'Car.number', 'Customer.name', 'Customer.phone')
        //         ->where('Car.agency_id' , '=' , $agency)
        //         ->get();
        //  $customerCar = Customer_Car::where('parent_community_id', '=', $agency)->paginate(15);
        //ddd($customerCar);
        return view('viewBookedCars', ['CustomerCars' => $car]);
    }

}
