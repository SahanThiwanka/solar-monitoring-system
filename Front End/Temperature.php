<html lang="en" dir="ltr">
    <head>
    <meta charset="UTF-8">
    <title> Solar System </title>
        <link rel="stylesheet" href="css/temperature.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
               <script>setTimeout(function(){
      location.reload()},20000);
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
              <i class='bx bxs-hot' id="ss"></i>
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

            <?php include "js/db_Conn.php"; // Using database connection file here

             $records = mysqli_query($db,"select * from solar order by id desc limit 1"); // fetch data from database

             while($data = mysqli_fetch_array($records))
             {
             ?>



            <div class="row">
                              <div class="col-xl-6 col-lg-8 col-12">
                              <div class="card shadow" >
                                  <div class="app-title">
                                            <p>Ambient Temperature</p>
                                        </div>
                              <div class="gauge" data-digit="<?php echo $data['heat']; ?>">
                                <div class="gauge-outer"></div>
                                <div class="gauge-inner"></div>
                                <div class="gauge-digits"></div>
                              </div>
                             </div>
                              </div>
                
                
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 offset-xl-1 offset-lg-0  ">
                    <div class="car " >
                         <div class="container">
                            <div class="app-titlee">
                                <p>Weather</p>
                            </div>
                            <div class="notification"> </div>
                            <div class="weather-container">
                                <div class="weather-icon">
                                    <img src="icons/unknown.png" alt="">
                                </div>
                                <div class="temperature-value">
                                    <p>- °<span>C</span></p>
                                </div>
                                <div class="temperature-description">
                                    <p> - </p>
                                </div>
                                <div class="location">
                                    <p>-</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
               
                
                
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card shadow" id="tem">
                        <div class="desc">
                            <p>Inverter Temperature</p>
                            <span><?php echo $data['temperature']; ?>&nbsp; ℃</span>
                        </div>
                        <i class='bx bxs-flame'></i>
                    </div>
                </div>
                <?php
                 }
                ?>
            </div>
    </section>   
  </section>
   <script src="js/Temperature.js"></script>                
  <script src="js/General%20Information%20script.js"></script>
     <script src="js/app.js"></script>

</body>
</html>
