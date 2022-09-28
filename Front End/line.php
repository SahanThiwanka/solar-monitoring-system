<?php
    include "js/db.php";
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
  <body style="text-align: center;">
    <h2 class="text-center"></h2>
      </body>

   <style>
      #regions_div{
        padding-left: 35px;
        visibility: hidden;
          

      }
       body {
              background-color: #E4E9F7;
             }

    </style>  

    <div class="text-center">
        <h2></h2>
    </div>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['corechart'],
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {

        var data = google.visualization.arrayToDataTable([
             ['date', 'power', 'yield'],
            <?php
                while($row = mysqli_fetch_assoc($chartQueryRecords)){
                    echo "['".$row['date']."',".$row['powerr'].",".$row['voltage']."],";
                }
            ?>
        ]);

        var options = {
        };

        var chart = new google.visualization.LineChart(document.getElementById('regions_div'));

        chart.draw(data, options);

        var hidePow = document.getElementById("hidePower");
   hidePow.onclick = function()
   {
      view = new google.visualization.DataView(data);
      view.hideColumns([1]); 
      chart.draw(view, options);
   }
   var hideYil = document.getElementById("hideYield");
   hideYil.onclick = function()
   {
      view = new google.visualization.DataView(data);
      view.hideColumns([2]); 
      chart.draw(view, options);
   }

      }
    </script>
    
    <meta charset="UTF-8">
    <title> Solar System </title>
    <link rel="stylesheet" href="css/General%20Information%20style.css">
    <!-- Boxiocns CDN Link -->
      
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
     
      

   </head>
<body>
    <div class="sidebar close">

        <div class="logo-details">
          <i class='bx bx-sun'></i>
          <span class="logo_name">Solar</span>
        </div>
    <ul class="nav-links">

          <li>
            <a href="General%20Information.php">
              <i class='bx bx-grid-alt' ></i>
              <span class="link_name">General Information</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="General%20Information.php">General Information</a></li>
            </ul>
        </li>

        <li>
            <div class="iocn-link">
            <a href="Device%20Monitoring.php">
              <i class='bx bx-book-alt' ></i>
              <span class="link_name">Data Tables</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
                </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="Device%20Monitoring.php">Data Tables</a></li>
                <li><a href="Device%20Monitoring.php">INSTANT_VALUES</a></li>
              <li><a href="Device%20Monitoring1.php">PV_INSTANT_VALUES </a></li>
            </ul>
        </li>

        <li>
            <a href="line.php">
              <i class='bx bx-line-chart'id="ss" ></i>
              <span class="link_name">Chart</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="line.php">Chart</a></li>
            </ul>
        </li>
        
         <li>
        <a href="Analytics.php">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="Analytics.php">Analytics</a></li>
        </ul>
      </li>

        <li>
            <a href="Temperature.php">
              <i class='bx bxs-hot'></i>
              <span class="link_name">Temperature</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="Temperature.php">Temperature</a></li>
            </ul>
        </li>

        <li>
            <a href="About.php">
              <i class='bx bx-comment-error'></i>
              <span class="link_name">About</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="About.php">About</a></li>
            </ul>
        </li>

       <li>
        <div class="profile-details">
          <div class="profile-content">

          </div>
          <div class="name-job">
            <a href="login_page.html"> <div class="profile_name" >Login</div></a>
          </div>
            <a href="login_page.html"><i class='bx bx-log-in'></i></a>
        </div>
      </li>

    </ul>
  </div>
    
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
     <h2>Power &amp; Yield Charts</h2><br>

     From: &nbsp;<input type="date" name="From" >
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     To: &nbsp;<input type="date" name="To">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <button onclick="drawRegionsMap()">Show Chart</button>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <button type="button" id="hideYield"  >Show Power</button>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   

     <button type="button" id="hidePower"  >Show Yiled</button>

     <div  id="regions_div" style="width: 1250px; height: 450px;"></div>


  </section>

  <script src="js/General%20Information%20script.js"></script>

<script>
function drawRegionsMap() {
  var data = document.getElementById("regions_div");
  if (window.getComputedStyle(data).visibility === "hidden") {
    data.style.visibility = "visible";
  }
  
}
</script>


</body>
</html>



