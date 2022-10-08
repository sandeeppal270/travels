<!DOCTYPE html>
<html lang="en">
  @include('header')

            

            <!-- sidebar menu -->
           @include('sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
       @include('navbar')
       <!-- page content -->
       <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Form</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          

          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2> Locations <small>Add new locations</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <div class="container">
                    <form action="{{ url('complaint') }}" method="post" enctype="multipart/form-data">
                      {!! csrf_field() !!}
                      <div class="form-group">
                        <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Id</label></br>
                      <input type="text" name="id" id="id" class="form-control"></br>
                      <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>App user</label></br>
                      <input type="text" name="app_user_id" id="app_user_id" class="form-control" placeholder="app user id"></br>
                      <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Address</label></br>
                      <input type="text" name="address" id="address" class="form-control"></br>
                      <span class="fa fa-address form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Latitude</label></br>
                      <input type="text" name="latitude" id="latitude" class="form-control"></br>
                      <span class="fa fa-latitude form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Longitude</label></br>
                      <input type="text" name="longitude" id="longitude" class="form-control"></br>
                      <span class="fa fa-longitude form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>City</label></br>
                      <input type="text" name="city" id="city" class="form-control"></br>
                      <span class="fa fa-city form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>District</label></br>
                      <input type="text" name="district" id="district" class="form-control"></br>
                      <span class="fa fa-district form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Zip</label></br>
                      <input type="text" name="zip" id="zip" class="form-control"></br>
                      <span class="fa fa-longitude form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                      <label>State</label></br>
                      <input type="text" name="state" id="state" class="form-control"></br>
                      <span class="fa fa-state form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Country</label></br>
                      <input type="text" name="country" id="country" class="form-control"></br>
                      <span class="fa fa-country form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Crime Count</label></br>
                      <input type="text" name="crime_count" id="crime_count" class="form-control"></br>
                      <span class="fa fa-crime form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Incident type</label></br>
                      <input type="text" name="incident_type" id="incident_type" class="form-control"></br>
                      <span class="fa fa-incident form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Reported Via</label></br>
                      <input type="text" name="r_type" id="r_type" class="form-control"></br>
                      <span class="fa fa-type form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                      <label>Agent</label></br>
                      <input type="text" name="agent" id="agent" class="form-control"></br>
                      <label>Action1</label></br>
                      <input type="text" name="action1" id="action1" class="form-control"></br>
                      <label>Action2</label></br>
                      <input type="text" name="action2" id="action2" class="form-control"></br>
                      <label>Action3</label></br>
                      <input type="text" name="action3" id="action3" class="form-control"></br>
                      <div class="form-group">
                        <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Delegated</label></br>
                      <input type="text" name="delegated" id="delegated" class="form-control"></br>
                      <span class="fa fa-delegated form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Status</label></br>
                      <input type="text" name="status" id="status" class="form-control"></br>
                      <span class="fa fa-status form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                </br>
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                      <button type="button" class="btn btn-primary">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
                      <button type="submit" class="btn btn-success" value="save">Submit</button>
                    </div>
                  </div>
                  </form>
                </div>
                </div>
              </div>

              

            </div>

           
        </div>
      </div>
      <!-- /page content -->
      <!-- footer content -->
   @include('footer')
      <!-- /footer content -->
    

{{-- 
@extends('complaint.layout')
@section('content')
<div class="card">
  <div class="card-header">Complaint Page</div>
  <div class="card-body">
      
      <form action="{{ url('complaint') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Id</label></br>
        <input type="text" name="id" id="id" class="form-control"></br>
        <label>App user</label></br>
        <input type="text" name="app_user_id" id="app_user_id" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Latitude</label></br>
        <input type="text" name="latitude" id="latitude" class="form-control"></br>
        <label>Longitude</label></br>
        <input type="text" name="longitude" id="longitude" class="form-control"></br>
        <label>City</label></br>
        <input type="text" name="city" id="city" class="form-control"></br>
        <label>District</label></br>
        <input type="text" name="district" id="district" class="form-control"></br>
        <label>Zip</label></br>
        <input type="text" name="zip" id="zip" class="form-control"></br>
        <label>State</label></br>
        <input type="text" name="state" id="state" class="form-control"></br>
        <label>Country</label></br>
        <input type="text" name="country" id="country" class="form-control"></br>
        <label>Crime Count</label></br>
        <input type="text" name="crime_count" id="crime_count" class="form-control"></br>
        <label>Incident type</label></br>
        <input type="text" name="incident_type" id="incident_type" class="form-control"></br>
        <label>R Type</label></br>
        <input type="text" name="r_type" id="r_type" class="form-control"></br>
        {{-- <label>Agent</label></br>
        <input type="text" name="agent" id="agent" class="form-control"></br>
        <label>Action1</label></br>
        <input type="text" name="action1" id="action1" class="form-control"></br>
        <label>Action2</label></br>
        <input type="text" name="action2" id="action2" class="form-control"></br>
        <label>Action3</label></br>
        <input type="text" name="action3" id="action3" class="form-control"></br> --}}
        {{-- <label>Delegated</label></br>
        <input type="text" name="delegated" id="delegated" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop --}}