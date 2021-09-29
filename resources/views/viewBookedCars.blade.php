@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="row">    
            <div class=" col-12 offset-md-1 col-md-10">
                <div class="card" style="border-radius: 25px; border-top: 1px solid #4ba3f5;">
                    <div class="card-body" style="border-radius: 25px;">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Car Model</th>
                            <th scope="col">Car Number</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Customer Contact</th>
                            <th scope="col">Rent Date</th>
                            <th scope="col">Total Days</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($CustomerCars as $CustomerCar)
                                @if ($CustomerCar->Car->agency_id == Auth::user()->agency->id)
                                <tr>
                                    <td>{{$CustomerCar->car->name}}</td>
                                    <td>{{$CustomerCar->car->number}}</td>
                                    <td>{{$CustomerCar->customer->user->name}}</td>
                                    <td>{{$CustomerCar->customer->user->phone}}</td>
                                    <td>{{$CustomerCar->start_date}}</td>
                                    <td>{{$CustomerCar->day}}</td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                      </table>
                    </div>
            
                </div>
            </div>
        </div>                
    </div>

@endsection