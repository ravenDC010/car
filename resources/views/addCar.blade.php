@extends('layouts.app')

@section('content')

<div class="container-fluid">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="row" style="padding: 2% 0%;">
        <div class="card col-12 offset-md-3 col-md-6">
            <div class="card-header">
                <h5 class="card-title col-12">CAR DETAILS</h5>                        
            </div>
            <div class="card-body">
                <form action="/addcar/store" method="POST">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('MODEL') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="number" class="col-md-6 col-form-label text-md-right">{{ __('NUMBER') }}</label>

                        <div class="col-md-6">
                            <input id="number" type="text" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number" autofocus>

                            @error('number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="seat" class="col-md-6 col-form-label text-md-right">{{ __('SEATING CAPACITY') }}</label>

                        <div class="col-md-6">
                            <input id="seat" type="text" class="form-control @error('seat') is-invalid @enderror" name="seat" value="{{ old('seat') }}" required autocomplete="seat" autofocus>

                            @error('seat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="rent" class="col-md-6 col-form-label text-md-right">{{ __('RENT PER DAY') }}</label>

                        <div class="col-md-6">
                            <input id="rent" type="text" class="form-control @error('rent') is-invalid @enderror" name="rent" value="{{ old('rent') }}" required autocomplete="rent" autofocus>

                            @error('rent')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-6">
                            <button type="submit" class="btn btn-primary">
                                ADD
                            </button>
                        </div>
                    </div>
                </form>
                    
            </div>
        </div>
    </div>                
</div>


@endsection