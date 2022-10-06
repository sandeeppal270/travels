<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('users.layout')
    @section('content')
<div class="row g-4">
                    <div class="col-md-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            
                            <form action="{{ url('email/' .$emails->id) }}" method="post">
                                {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$emails->id}}" id="id" />
                            <label>App user</label></br>
                        <input type="text" name="app_user" id="app_user" value="{{$emails->app_user}}" class="form-control"></br>
                        <label>Contact person</label></br>
                        <input type="text" name="contact_person" id="contact_person" value="{{$emails->contact_person}}" class="form-control"></br>
                        <label>Email id</label></br>
                        <input type="email" name="email_id" id="email_id" value="{{$emails->email_id}}" class="form-control"></br>
                        <label>Address</label></br>
                        <input type="text" name="address" id="address" value="{{$emails->address}}" class="form-control"></br>
                        <label>Image attachment</label></br>
                        <input type="file" name="image_attachment" id="image_attachment" value="{{$emails->image_attachment}}" class="form-control"></br>
                        <label>City name</label></br>
                        <input type="text" name="city_name" id="city_name" value="{{$emails->city_name}}" class="form-control"></br>
                        <label>Latitude</label></br>
                        <input type="text" name="latitude" id="latitude" value="{{$emails->latitude}}" class="form-control"></br>
                        <label>Longitude</label></br>
                        <input type="text" name="longitude" id="longitude" value="{{$emails->longitude}}" class="form-control"></br>
                        <input type="submit" value="Update" class="btn btn-success"></br>
                    </form>
  
                        </div>
                    </div>
@stop
</body>
</html>
