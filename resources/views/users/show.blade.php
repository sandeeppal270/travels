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
        <div class="w-100">
          {{-- <div class="page-title"> --}}
            {{-- <div class="title_left">
              <h3>App users</h3>
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
            <div class="col-md-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2> USER <small>App user details</small></h2>
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
                </div> --}}
                {{-- <div class="x_content"> --}}
                  {{-- <br /> --}}
                  {{-- <div class="container">  --}}
                    {{-- <h5 class="card-title">App user: {{ $emails->app_user }}</h5>
                    <p class="card-text">Contact person : {{ $emails->contact_person }}</p>
                    <p class="card-text">Email id : {{ $emails->email_id }}</p>
                    <p class="card-text">Address : {{ $emails->address }}</p>
                    <p class="card-text">Image attachment : {{ $emails->image_attachment  }}</p>
                    <p class="card-text">City name : {{ $emails->city_name }}</p>
                    <p class="card-text">Latitude : {{ $emails->latitude }}</p>
                    <p class="card-text">Longitude : {{ $emails->longitude }}</p> --}}

                    {{-- page content================ --}}

                    <div class="right_col" role="main">
                      <div class="">
                        <div class="page-title">
                          <div class="title_left">
                            <h3>APP USERS</h3>
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
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Users<small>User report</small></h2>
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
                                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                  <div class="profile_img">
                                    <div id="crop-avatar">
                                      <!-- Current avatar -->
                                      <img class="img-responsive avatar-view img-thumbnail" src="https://res.cloudinary.com/softwareassurance/{{ $app_users->avatar  }}" alt="Avatar" title="Change the avatar" width="200" />
                                    </div>
                                  </div>
                                  <h3>{{ $app_users->name }}</h3>
            
                                  <ul class="list-unstyled user_data">
                                    <li><h2 class="card-title"><i class="fa fa-user icon"></i>&nbsp;&nbsp;&nbsp;Id: {{ $app_users->id }}</h2>
                                    </li>
            
                                    <li>
                                      <h2 class="card-title"><i class="fa fa-user icon"></i>&nbsp;&nbsp;&nbsp;Name : {{ $app_users->name }}</h2>
                                    </li>
                                    <li>
                                      <h2 class="card-title"><i class="fa fa-envelope icon"></i>&nbsp;&nbsp;&nbsp;Email Id : {{ $app_users->email }}</p>
                                    </li>
                                    <li>
                                      <h2 class="card-title"><i class="fa fa-phone-square icon"></i>&nbsp;&nbsp;&nbsp;Telephone : {{ $app_users->telephone }}</h2>
                                    </li>
                                    <li>
                                      <h2 class="card-text"><i class="fa fa-image"></i>&nbsp;&nbsp;&nbsp;Image attachment : {{ $app_users->avatar  }}</h2>
                                    </li>
                                    <li>
                                      <h2 class="card-text"><i class='fa fa-location-arrow'></i>&nbsp;&nbsp;&nbsp;Latitude : {{ $app_users->latitude }}</h2>
                                    </li>
                                    <li>
                                      <h2 class="card-text"><i class='fa fa-location-arrow'></i>&nbsp;&nbsp;&nbsp;Longitude : {{ $app_users->longitude }}</h2>
                                    </li>
                                    <li>
                                      <h2 class="card-text"><i class='fa fa-venus'></i></i>&nbsp;&nbsp;&nbsp;Gender : {{ $app_users->gender }}</h2>
                                    </li>
                                    <li>
                                      <h2 class="card-text"><i class='fa fa-child'></i></i>&nbsp;&nbsp;&nbsp;Age : {{ $app_users->age }}</h2>
                                    </li>
            
                                   
                                  </ul>
                                  <br />
                                  {{-- <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a> --}}
                                 
            
                                  <!-- start skills -->
                                  {{-- <h4>Skills</h4>
                                  <ul class="list-unstyled user_data">
                                    <li>
                                      <p>Web Applications</p>
                                      <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                                      </div>
                                    </li>
                                    <li>
                                      <p>Website Design</p>
                                      <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                                      </div>
                                    </li>
                                    <li>
                                      <p>Automation & Testing</p>
                                      <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                                      </div>
                                    </li>
                                    <li>
                                      <p>UI / UX</p>
                                      <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                                      </div>
                                    </li>
                                  </ul> --}}
                                  <!-- end of skills -->
            
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
            
                                  <div class="profile_title">
                                    <div class="col-md-6">
                                      <h2>User Activity Report</h2>
                                    </div>
                                    <div class="col-md-6">
                                      <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span><input type="date" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}"></span> <b class="caret"></b>
                                        <span><input type="DateTime" value="{{ Carbon\Carbon::now()->format('Y-m-d H:i:s e') }}"></span> <b class="caret"></b><br>&nbsp;&nbsp;&nbsp;
                                        <input type="hidden" name="tz" id="tz">
                                        <span><input type="day" value="{{ Carbon\Carbon::now()->format('l') }}"></span> <b class="caret"></b>                                      </div>
                                    </div>
                                  </div>
                                  <!-- start of user-activity-graph -->
                                  <div id="graph_bar" style="width:100%; height:280px;"></div>
                                  <!-- end of user-activity-graph -->
            
                                  {{-- <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                      <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
                                      </li>
                                      <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                                      </li>
                                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                                      </li>
                                    </ul> --}}
                                    {{-- <div id="myTabContent" class="tab-content">
                                      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            
                                        <!-- start recent activity -->
                                        <ul class="messages">
                                          <li>
                                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                                            <div class="message_date">
                                              <h3 class="date text-info">24</h3>
                                              <p class="month">May</p>
                                            </div>
                                            <div class="message_wrapper">
                                              <h4 class="heading">Desmond Davison</h4>
                                              <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                              <br />
                                              <p class="url">
                                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                              </p>
                                            </div>
                                          </li>
                                          <li>
                                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                                            <div class="message_date">
                                              <h3 class="date text-error">21</h3>
                                              <p class="month">May</p>
                                            </div>
                                            <div class="message_wrapper">
                                              <h4 class="heading">Brian Michaels</h4>
                                              <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                              <br />
                                              <p class="url">
                                                <span class="fs1" aria-hidden="true" data-icon=""></span>
                                                <a href="#" data-original-title="">Download</a>
                                              </p>
                                            </div>
                                          </li>
                                          <li>
                                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                                            <div class="message_date">
                                              <h3 class="date text-info">24</h3>
                                              <p class="month">May</p>
                                            </div>
                                            <div class="message_wrapper">
                                              <h4 class="heading">Desmond Davison</h4>
                                              <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                              <br />
                                              <p class="url">
                                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                              </p>
                                            </div>
                                          </li>
                                          <li>
                                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                                            <div class="message_date">
                                              <h3 class="date text-error">21</h3>
                                              <p class="month">May</p>
                                            </div>
                                            <div class="message_wrapper">
                                              <h4 class="heading">Brian Michaels</h4>
                                              <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                              <br />
                                              <p class="url">
                                                <span class="fs1" aria-hidden="true" data-icon=""></span>
                                                <a href="#" data-original-title="">Download</a>
                                              </p>
                                            </div>
                                          </li>
            
                                        </ul>
                                        <!-- end recent activity -->
            
                                      </div> --}}
                                      {{-- <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
            
                                        <!-- start user projects -->
                                        <table class="data table table-striped no-margin">
                                          <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Project Name</th>
                                              <th>Client Company</th>
                                              <th class="hidden-phone">Hours Spent</th>
                                              <th>Contribution</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>1</td>
                                              <td>New Company Takeover Review</td>
                                              <td>Deveint Inc</td>
                                              <td class="hidden-phone">18</td>
                                              <td class="vertical-align-mid">
                                                <div class="progress">
                                                  <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>2</td>
                                              <td>New Partner Contracts Consultanci</td>
                                              <td>Deveint Inc</td>
                                              <td class="hidden-phone">13</td>
                                              <td class="vertical-align-mid">
                                                <div class="progress">
                                                  <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>3</td>
                                              <td>Partners and Inverstors report</td>
                                              <td>Deveint Inc</td>
                                              <td class="hidden-phone">30</td>
                                              <td class="vertical-align-mid">
                                                <div class="progress">
                                                  <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>4</td>
                                              <td>New Company Takeover Review</td>
                                              <td>Deveint Inc</td>
                                              <td class="hidden-phone">28</td>
                                              <td class="vertical-align-mid">
                                                <div class="progress">
                                                  <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                                                </div>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table> --}}
                                        <!-- end user projects -->
            
                                      {{-- </div> --}}
                                      {{-- <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                        <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                                          photo booth letterpress, commodo enim craft beer mlkshk </p>
                                      </div> --}}
                                    {{-- </div> --}}
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
       

                    {{-- / page content================= --}}

                  
{{-- </div>
</div>
</div>



</div>


</div>
</div> --}}
<!-- /page content -->
<!-- footer content -->
@include('footer')
<!-- /footer content -->



















