
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
                  <h2> Users <small>Add new users</small></h2>
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
                 
      <form action="{{ url('users') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="form-group">
        {{-- <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
        <label>Id</label></br>
        <input type="text" name="id" id="id" class="form-control"></br>
        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
      </div> --}}
    </div>
    <div class="form-group">
      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
        <label>Telephone</label></br>
        <input type="text" name="telephone" id="telephone" class="form-control"></br>
        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
        <label>Image attachment</label></br>
        <input type="file" name="avatar" id="avatar" class="form-control"></br>
        <span class="fa fa-image form-control-feedback right" aria-hidden="true"></span>
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
        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" class="form-control"></br>
        <span class="fa fa-gender form-control-feedback right" aria-hidden="true"></span>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
        <label>Age</label></br>
        <input type="text" name="age" id="age" class="form-control"></br>
        <span class="fa fa-age form-control-feedback right" aria-hidden="true"></span>
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
    

{{-- @extends('users.layout')
@section('content')
<div class="card">
  <div class="card-header">Users page</div>
  <div class="card-body">
      
      <form action="{{ url('users') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Id</label></br>
        <input type="text" name="id" id="id" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <label>Telephone</label></br>
        <input type="text" name="telephone" id="telephone" class="form-control"></br>
        <label>Image attachment</label></br>
        <input type="file" name="avatar" id="avatar" class="form-control"></br>
        <label>Latitude</label></br>
        <input type="text" name="latitude" id="latitude" class="form-control"></br>
        <label>Longitude</label></br>
        <input type="text" name="longitude" id="longitude" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop --}}