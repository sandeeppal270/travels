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
                <h6>Locations</h6>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="card-body">
                    <a href="{{ url('/complaint/create') }}" class="btn btn-success btn-sm" title="Add New complaint">
                        <i class="fa fa-plus" aria-hidden="true"></i>NEW LOCATIONS</a>
                    </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" >
             
              <div class="col-md-12 col-sm-12 col-xs-12 ">
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
                    <p class="text-muted font-13 m-b-30">
                      Complaint record
                    </p>
                   

                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">App user</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">latitude/ longitude</th>
                                        <th scope="col">City/ District/ Zip</th>
                                        <th scope="col">State/ Country</th>
                                        <th scope="col">Crime Count/ Incident Type/ R Type</th>
                                        <th scope="col">Agent</th>
                                        <th scope="col">Action1/ Action2/ Action3</th>
                                        <th scope="col">Delegated/ Status</th>
                                        <th scope="col">Created_at</th>
                                        <th scope="col">Updated_at</th>
                                        <th scope="col">Actions</th>
                        </tr>
                      </thead>

                      <tbody>
                                    @foreach($locations as $item)
                                        <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->id }}</td> 
                                        <td>{{ $item->app_user_id }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->latitude }}/ {{ $item->longitude }}</td>
                                        <td>{{ $item->city }}/ {{ $item->district }}/ {{ $item->zip }}</td>
                                        <td>{{ $item->state }}/ {{ $item->country }}</td>
                                        <td>{{ $item->crime_count }}/ {{ $item->incident_type }}/ {{ $item->r_type }}</td>
                                        <td>{{ $item->agent }}</td>
                                        <td>{{ $item->action1 }}/ {{ $item->action2 }}/ {{ $item->action3 }}</td>
                                        <td>{{ $item->delegated }}/ {{ $item->status }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                      
                                       
                                        
                                       
                                        <td>
                                            <a href="{{ url('/complaint/' . $item->id) }}" title="View Email"><button class="btn btn-info btn-sm">View</button></a>
                                            <a href="{{ url('/complaint/' . $item->id . '/edit') }}" title="Edit Email"><button class="btn btn-primary btn-sm"> Edit</button></a>
                                            <form method="POST" action="{{ url('/complaint' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete complaint" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
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
        
        