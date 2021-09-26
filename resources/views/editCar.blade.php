@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row" style="padding: 2% 0%;">
        <div class="card col-12 offset-md-3 col-md-6">
            <div class="card-header">
                <h5 class="card-title col-12">CAR DETAILS</h5>                        
            </div>
            <div class="card-body row">
                <form method="POST">
                    <div class="form-group row">
                        <label for="days" class="col-12 col-md-6 col-form-label"><h6>MODEL</h6></label>        
                        <div class="col-md-6">
                            <input id="model" type="text" class="form-control" name="phone" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="days" class="col-12 col-md-6 col-form-label"><h6>NUMBER</h6></label>        
                        <div class="col-md-6">
                            <input id="number" type="text" class="form-control" name="number" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="days" class="col-12 col-md-6 col-form-label"><h6>SEATING CAPACITY</h6></label>        
                        <div class="col-md-6">
                            <input id="seat" type="text" class="form-control" name="seat" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="days" class="col-12 col-md-6 col-form-label"><h6>RENT PER DAY</h6></label>        
                        <div class="col-md-6">
                            <input id="rent" type="text" class="form-control" name="rent" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12 col-md-6">
                            <button type="submit" class="btn btn-primary">
                                MODIFY
                            </button>
                        </div>
                    </div>
                </form>
                    
            </div>
        </div>
    </div>                
</div>

@endsection