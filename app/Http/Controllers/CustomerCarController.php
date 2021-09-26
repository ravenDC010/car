<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Customer_Car;

class CustomerCarController extends Controller
{
    public function index()
    {
        $agency = Auth::user()->agency->id;
        $car = DB::table('Customer_Car')
                ->join('Car','Customer_Car.car_id','=','Car.id')
                ->join('Customer','Customer_Car.customer_id','=','Customer.id')
                ->select('Customer_Car.day' , 'Customer_Car.start_date' , 'Car.name', 'Car.number', 'Customer.name', 'Customer.phone')
                ->where('Car.agency_id' , '=' , $agency)
                ->get();
        //  $customerCar = Customer_Car::where('parent_community_id', '=', $agency)->paginate(15);
        //ddd($customerCar);
        return view('viewBookedCars', ['CustomerCars' => $car]);
    }

}
