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
                  <h2> EMAIL <small>Add new email</small></h2>
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
                  <form action="{{ url('email') }}" class="form-horizontal form-label-left input_mask" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>App user</label></br>
                      <input type="text" name="app_user" class="form-control has-feedback-left" id="app_user" placeholder="App Users">
                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>
                  </div>
              
                    <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Contact person</label></br>
                      <input type="text" name="contact_person" class="form-control has-feedback-left" id="contact_person" placeholder="Contact person">
                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>
                  </div>
              
                    <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Email id</label></br>
                      <input type="text" name="email_id" class="form-control has-feedback-left" id="email_id" placeholder="Email">
                      <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                    </div>
                  </div>
              
                    <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Address</label></br>
                      <input type="text"  name="address" class="form-control " id="address" placeholder="address">
                      <span class="fa fa-address form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
              
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Image Attachment</label></br>
                      <input type="file" name="image_attachment" class="form-control" id="image_attachment">
                      <span class="fa fa-image form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
              
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>City name</label></br>
                      <input type="text" name="city_name" class="form-control" id="city_name" placeholder="city name">
                      <span class="fa fa-city form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
              
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Latitude</label></br>
                      <input type="text" name="latitude" class="form-control" id="latitude" placeholder="latitude">
                      <span class="fa fa-latitude form-control-feedback right" aria-hidden="true"></span>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Longitude</label></br>
                      <input type="text" name="longitude" class="form-control" id="longitude" placeholder="longitude">
                      <span class="fa fa-longitude form-control-feedback right" aria-hidden="true"></span>
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
    
