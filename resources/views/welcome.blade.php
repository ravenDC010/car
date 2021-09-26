@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif

        <div class="row">    
            @foreach ($Cars as $Car)
            <div class=" col-12 col-md-4" style="padding: 2% 3%;">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title col-12 col-md-8">{{$Car->name}}</h5>                        
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <h6 class="col-12 col-md-6">CAR NUMBER</h6>
                            <h6 class="col-12 col-md-6">{{$Car->number}}</h6>
                        </div>
                        <div class="row">
                            <h6 class="col-12 col-md-6">SEATING CAPACITY</h6>
                            <h6 class="col-12 col-md-6">{{$Car->seat}}</h6>
                        </div>
                        <div class="row">
                            <h6 class="col-12 col-md-6">RENT</h6>
                            <h6 class="col-12 col-md-6">RS. {{$Car->rent}}</h6>
                        </div>

                        @auth

                        <form method="POST" action="/viewcar/store">
                            @csrf

                            <div class="form-group row">
                                <input type="hidden" class="form-check-input" name="car" value="{{$Car->id}}">
                            </div>
    
                            <div class="form-group row">
                                <label for="day" class="col-12 col-md-6 col-form-label">{{ __('NUMBER OF DAYS') }}</label>
    
                                <div class="col-md-6">
                                    <select name="day" class="form-select @error('day') is-invalid @enderror" required autofocus>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    @error('day')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            @if (! Auth::user()->is_agency )

                            <div class="form-group row mb-0">
                                <div class="col-12 col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        BOOK
                                    </button>
                                </div>
                            </div>

                            @endif
                        </form>
                        
                        @endauth

                    </div>
                </div>
            </div>
            @endforeach
        </div>                
    </div>

@endsection