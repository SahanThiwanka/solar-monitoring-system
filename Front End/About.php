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

       <script>setTimeout(function(){
      location.reload()},20000);
      </script>
      <style>
        @charset "UTF-8";
body {
  background-color: #1c2039;
}

.gauge {
  position: relative;
  width: 7em;
  height: 5.8em;
  margin: 0.5em auto;
  font-size: 5em;
  direction: ltr;
}

.gauge-inner {
  position: relative;
  top: -4.85em;
  opacity: 0;
  transition: opacity 0.5s;
}
.gauge.load .gauge-inner {
  opacity: 1;
}
.gauge-inner .bar {
  left: 50%;
  position: absolute;
  transform-origin: 0 2.5em;
  width: 0.03em;
  height: 0.2em;
  background: rgba(255, 255, 255, 0.2);
}
.gauge-inner .bar.peak {
  height: 0.35em;
}

.gauge-outer {
  position: relative;
  height: 100%;
  margin-top: 0.3em;
}
.gauge-outer .bar {
  position: absolute;
  width: 0.05em;
  height: 0.7em;
  left: 50%;
  transform-origin: 0 3.43em;
  background-color: rgba(0, 0, 0, 0.2);
  opacity: 0;
  transition: opacity 0.5s;
}
.gauge.load .gauge-outer .bar {
  opacity: 1;
}

.gauge-digits {
  position: absolute;
  height: 81%;
  width: 70%;
  top: 1.3em;
  left: 50%;
  transform: translateX(-50%);
  color: rgba(255, 255, 255, 0.4);
  opacity: 0;
  transition: opacity 0.5s 0.5s;
}
.gauge.load .gauge-digits {
  opacity: 1;
}
.gauge-digits.scale {
  transform: translateX(-50%) scale(0.8);
}
.gauge-digits .digit {
  position: absolute;
  font-size: 0.4em;
  line-height: 0.2;
}
.gauge-digits .current-digit {
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  font-size: 1.5em;
  color: rgba(255, 255, 255, 0.9);
}
.gauge-digits .current-digit:after {
  content: "°";
}
      </style>
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
              <i class='bx bxs-hot'></i>
              <span class="link_name">Temperature</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="Temperature.php">Temperature</a></li>
            </ul>
        </li>

        <li>
            <a href="About.php">
              <i class='bx bx-comment-error'id="ss"></i>
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
           
          </div> 
          
        
    </section>   
  </section>
  <script src="js/General%20Information%20script.js"></script>
</body>
</html>
