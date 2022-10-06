<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('complaint.layout')
    @section('content')
<div class="row g-4">
                    <div class="col-md-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            
   <form action="{{ url('complaint/' .$locations->id) }}" method="post">
        		{!! csrf_field() !!}
        	@method("PATCH")
      	  <input type="hidden" name="id" id="id" value="{{$locations->id}}" />
        <label>Id</label></br>
        <input type="text" name="id" id="id" value="{{$locations->id}}" class="form-control" readonly></br>
       	 <label>App user</label></br>
        <input type="text" name="app_user_id" id="app_user_id" value="{{$locations->app_user_id}}" class="form-control" readonly></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$locations->address}}" class="form-control"></br>
        <label>Latitude</label></br>
        <input type="text" name="latitude" id="latitude" value="{{$locations->latitude}}" class="form-control"></br>
        <label>Longitude</label></br>
        <input type="text" name="longitude" id="longitude" value="{{$locations->longitude}}" class="form-control"></br>
        <label>City</label></br>
        <input type="text" name="city" id="city" value="{{$locations->city}}" class="form-control"></br>
        <label>District</label></br>
        <input type="text" name="district" id="district" value="{{$locations->district}}" class="form-control"></br>
        <label>Zip</label></br>
        <input type="text" name="zip" id="zip" value="{{$locations->zip}}" class="form-control"></br>
        <label>State</label></br>
        <input type="text" name="state" id="state" value="{{$locations->state}}" class="form-control"></br>
        <label>Country</label></br>
        <input type="text" name="country" id="country" value="{{$locations->country}}" class="form-control"></br>
        <label>Crime Count</label></br>
        <input type="text" name="crime_count" id="crime_count" value="{{$locations->crime_count}}" class="form-control"></br>
        <label>Incident Type</label></br>
        <input type="text" name="incident_tpe" id="incident_tpe" value="{{$locations->incident_tpe}}" class="form-control"></br>
        <label>R Type</label></br>
        <input type="text" name="r_type" id="r_type" value="{{$locations->r_type}}" class="form-control"></br>
        <label>Agent</label></br>
        <input type="text" name="agent" id="agent" value="{{$locations->agent}}" class="form-control"></br>
        <label>Action1</label></br>
        <input type="text" name="action1" id="action1" value="{{$locations->action1}}" class="form-control"></br>
        <label>Action2</label></br>
        <input type="text" name="action2" id="action2" value="{{$locations->action2}}" class="form-control"></br>
        <label>Action3</label></br>
        <input type="text" name="action3" id="action3" value="{{$locations->action3}}" class="form-control"></br>
        <label>Delegated</label></br>
        <input type="text" name="delegated" id="delegated" value="{{$locations->delegated}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" value="{{$locations->status}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
                        </div>
                    </div>
@stop
</body>
</html>