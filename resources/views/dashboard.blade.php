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
              <a onclick="closeFullscreen();" title="Close FullScreen" data-toggle="tooltip" data-placement="top"><span aria-hidden="true"><b>X</b></span></a>
              <a onclick="openFullscreen();" data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              {{-- <a onclick="openFullscreen();">Open Fullscreen</a> --}}
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
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Echarts <small>Report Analysis</small></h3>
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
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <script src="https://cdnjs.com/libraries/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<div class="col-md-12 bg-info">
<section class="content" style="margin-left:20px;margin-right:20pzx;margin-top:50px;">
<label for="cars">Select Chart Style</label>
<select name="chart" onchange="myFunction()" class="form-control" id="chart" style="width:120px;">
  <option value="pie">Pie</option>
  <option value="column">Column</option>
  <option value="pyramid">Pyramid</option>
  <option value="bar">Bar</option>
</select>

<div class="product-index" align="right" style="margin-top:1px;">
<div id="chartContainer" style="height:520px; width:100%"></div>

</div>


</section>
<script>
  function myFunction(){
    var chartType = document.getElementById("chart").value;
     var chart = new CanvasJS.Chart("chartContainer",{
      animatonEnabled:true,
      title:{
        text:"city (zip code) with crime count"
      },
      subtitle:[{
        text:"crime count"

      }],
      data : [{
        type:chartType, //"column",
        // yValueFormatString: "##0.00\"\"",
        yValueFormatString: "##0.00\"\"",
        zValueFormatString: "######\"\"",
		    indexLabel: "{label}({z})({y})",
		dataPoints: <?php echo json_encode($data,JSON_NUMERIC_CHECK); ?>
      }]
     });
     chart.render();
  }
</script>
</div>

                </div>
  
  
  
               
  
  
                
                <!-- Show Graph Data -->
<script src="https://cdnjs.com/libraries/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>

<div class="map_canvas">
  
            <canvas id="myChart" width="auto" height="100"></canvas>
</div>

// <script>
// var ctx = document.getElementById('myChart').getContext('2d');
// var myChart = new Chart(ctx, {
//     type: 'bar',
//     data: {
//         labels: <?php echo json_encode($labels) ?>,
//         datasets: [{
//             label: '',
//             data: <?php echo json_encode($prices); ?>,
//             backgroundColor: [
//                 'rgba(31, 58, 147, 1)',
//                 'rgba(37, 116, 169, 1)',
//                 'rgba(92, 151, 191, 1)',
//                 'rgb(200, 247, 197)',
//                 'rgb(77, 175, 124)',
//                 'rgb(30, 130, 76)'
//             ],
//             borderColor: [
//                 'rgba(31, 58, 147, 1)',
//                 'rgba(37, 116, 169, 1)',
//                 'rgba(92, 151, 191, 1)',
//                 'rgb(200, 247, 197)',
//                 'rgb(77, 175, 124)',
//                 'rgb(30, 130, 76)'
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             y: {
//                 max: 200,
//                 min: 0,
//                 ticks: {
//                     stepSize: 50
//                 }
//             }
//         },
//         plugins: {
//             title: {
//                 display: false,
//                 text: 'Custom Chart Title'
//             },
//             legend: {
//                 display: false,
//             }
//         }
//     }
// });
// </script> --}}
  
  
                
  
  
               
                
  
                
  
               
               
        <!-- /page content -->

        <!-- footer content -->
        @include('footer')
        <!--footer content-->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
       
    <!-- ECharts -->
    <script src="../vendors/echarts/dist/echarts.min.js"></script>
    <script src="../vendors/echarts/map/js/world.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>


    <!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/6288c1c07b967b1179908438/1g3j39mmj';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
	
  </body>
</html>
