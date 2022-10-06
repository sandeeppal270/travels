<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('report.layout')
    @section('content')
<div class="row g-4">
                    <div class="col-md-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            
                            <form action="{{ url('report/' .$report_journeys->id) }}" method="post">
                                {!! csrf_field() !!}
                            @method("PATCH")
                        <input type="hidden" name="id" id="id" value="{{$report_journeys->id}}" />
                        <label>Id</label></br>
                        <input type="text" name="id" id="id" value="{{$report_journeys->id}}" class="form-control"></br>
                        <label>App user</label></br>
                        <input type="text" name="app_user_id" id="app_user_id" value="{{$report_journeys->app_user_id}}" class="form-control" readonly></br>
                        <label>Message</label></br>
                        <input type="text" name="message" id="message" value="{{$report_journeys->message}}" class="form-control"></br>
                        <label>Email</label></br>
                        <input type="email" name="email_id" id="email_id" value="{{$report_journeys->email_id}}" class="form-control"></br>
                        <label>App User Name</label></br>
                        <input type="text" name="app_user_name" id="app_user_name" value="{{$report_journeys->app_user_name}}" class="form-control"></br>
                        <label>Journey Image Attachment</label></br>
                        <input type="file" name="journey_image_attachment" id="journey_image_attachment" value="{{$report_journeys->journey_image_attachment}}" class="form-control"></br>
                        <label>Start Location</label></br>
                        <input type="text" name="start_location" id="start_location" value="{{$report_journeys->start_location}}" class="form-control"></br>
                        <label>Destination Location</label></br>
                        <input type="text" name="destination_location" id="destination_location" value="{{$report_journeys->destination_location}}" class="form-control"></br>
                        <input type="submit" value="Update" class="btn btn-success"></br>
                     
                    </form>
  
                        </div>
                    </div>
@stop
</body>
</html>