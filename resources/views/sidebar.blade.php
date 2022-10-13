<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('dashboard.page') }}" class="site_title"><i class="fa fa-recycle"></i> <span><strong>TRAVEL-SAFE</strong></span></a>
            </div>
<div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
                <h2>Admin Users</h2>
              </div>
              <div class="clearfix"></div>
            </div>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('dashb.page')}}"><i class="fa fa-dashboard"></i><strong>Dashboard </strong></a>
                  <li><a href="{{route('analytics.page')}}"><i class="fa fa-bar-chart"></i><strong>Analytics </strong></a>
                     
                  {{-- </li>
                  <li><a><i class="fa fa-edit"></i> Admin Users </a>
                    
                  </li> --}}
                  <li><a href="{{route('user.page')}}"><i class="fa fa-desktop"></i><strong>App User Details</strong></a>
                   
                  </li>
                  <li><a href="{{route('email.page')}}"><i class="fa fa-inbox"></i><strong>Emergency Emails</strong> </a>
                    
                  </li>
                  <li><a><i class="fa fa-line-chart"></i><strong>Geo Fences</strong></a>
                   
                  </li>
                  
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('locations.page')}}"><i class="fa fa-location-arrow"></i><strong>Location</strong></a>
                  
                  </li>
                  <li><a href="{{route('report.page')}}"><i class="fa fa-warning"></i><strong>Journey Alerts</strong> </a> 
                  </li>        
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> CCTV Install<span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>
            </div>    
</body>
</html>