<!DOCTYPE html>
<html lang="en">
  @include('header')
            <!-- sidebar menu -->
           @include('sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              {{-- <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a> --}}
              <a onclick="closeFullscreen();" title="Close FullScreen" data-toggle="tooltip" data-placement="top"><span aria-hidden="true"><b>X</b></span></a>
              <a onclick="openFullscreen();" data-toggle="tooltip" data-placement="top" title="FullScreen">
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
               <h6>Report Journey</h6>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="card-body">
                    <a href="{{ url('/report/create') }}" class="btn btn-success btn-sm" title="Add New Emails">
                        <i class="fa fa-plus" aria-hidden="true"></i>NEW REPORT JOURNEY</a>
                    </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
             
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   
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
                   
                   

                     <table id="datatable-buttons" class="table table-striped table-bordered">
                     <thead>
                                    <tr>
                                    
                                        <th scope="col">S.No</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">App User</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">App User Name</th>
                                        <th scope="col">Journey Image Attachment</th>
                                        <th scope="col">Start Location</th>
                                        <th scope="col">Destination Location</th>
                                        <th scope="col">Created_at</th>
                                        <th scope="col">updated_at</th>
                                        <th scope="col">Actions</th>
                                       
                        
                                   
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($report_journeys as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->app_user_id }}</td>
                                        <td>{{ $item->message }}</td>
                                        <td>{{ $item->email_id }}</td>
                                        <td>{{ $item->app_user_name }}</td>
                                        <td>
                                        <img src="https://res.cloudinary.com/softwareassurance/{{ $item->journey_image_attachment }}"  class="img-thumbnail" width="75" />    
                                        </td>
                                        <td>{{ $item->start_location }}</td>
                                        <td>{{ $item->destination_location }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td>
                                            <a href="{{ url('/report/' . $item->id) }}" title="View Email"><button class="btn btn-info btn-sm">View</button></a>
                                            <a href="{{ url('/report/' . $item->id . '/edit') }}" title="Edit Email"><button class="btn btn-primary btn-sm"> Edit</button></a>
                                            <form method="POST" action="{{ url('/report' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete report" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            
                    </table> 
                  </div>
                </div>
              </div>

              
            </div>
          </div>
        </div>
        @include('footer')
        <!-- /page content -->