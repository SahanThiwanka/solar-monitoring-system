<?php
    include "js/db.php";
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Solar System </title>
        <link rel="stylesheet" href="css/General%20Information%20style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/Device%20Monitoring%201.css">
        <link rel="stylesheet" type="text/css" href="css/Device%20Monitoring%202.css">
        
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

       var data = google.visualization.arrayToDataTable([
             ['date','yield'],
            <?php
                while($row = mysqli_fetch_assoc($chartQueryRecords4)){
                    echo "['".$row['date']."',".$row['Total_yield']."],";
                }
            ?>
        ]);

        var options = {
          title: 'My Daily Activities',
            is3D:true
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

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
              <i class='bx bx-grid-alt'></i>
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
              <i class='bx bx-line-chart' ></i>
              <span class="link_name">Chart</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="line.php">Chart</a></li>
            </ul>
        </li>
        
         <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2'id="ss" ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
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
      <section class="section">

              <div class="right">

                    <div class="col-xl-6 col-lg-11 col-md-11 col-11">
                    <div class="card shadow" id="piechart">
                        <canvas class="shadow" id="chartClientes" width="400" height=""></canvas>
                    </div>
                    </div>
                       
                 
          </div> 

    </section>   
  </section>
  <script src="js/General%20Information%20script.js"></script>
</body>
</html>
