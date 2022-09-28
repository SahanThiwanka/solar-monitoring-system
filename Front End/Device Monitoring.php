
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
        </script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <link rel="stylesheet"href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      

   </head>
<body >
    
  
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
              <i class='bx bx-book-alt' id="ss" ></i>
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
        
          <div class="row">
               <div class="col-xl-3 col-lg-6 col-12">
                   <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />
              </div>
              <div class="col-xl-3 col-lg-6 col-12">
                  <input type="text" name="form_date" id="to_date" class="form-control" placeholder="To Date"/>
              </div>
              <div class="col-xl-3 col-lg-6 col-12">
                  <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info"/>
              </div>
          </div>
          
               <div class="right">
                  <div class="app-title">
                                            <p>Daily Instant Values</p>
                                        </div>

                    <div class="limiter">

                        <div class="wrap-table100">
                            <div class="table100">
                                <table id="order_table" class="table-bordered">
                                    <thead>
                                        <tr class="table100-head">
                                            <th class="column1">Table ID</th>
                                            <th class="column2">Date</th>
                                            <th class="column3">Device ID</th>
                                            <th class="column1">current</th>
                                            <th class="column1">voltage</th>
                                            <th class="column1">power</th>
                                            <th class="column1">Total Yield</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php  // Using database connection file here
                                        $db = mysqli_connect("localhost","root","","db");

                                        $records = "select * from solar order by id desc";// fetch data from database  //////( GETDATE() AS Date ) select * from solar order by date desc limit 100
                                        $result= mysqli_query($db,$records); 
                                        ?>
                                       
                                        <?php 
                                        while($row = mysqli_fetch_array($result))
                                        {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['device_id']; ?></td>
                                            <td><?php echo $row['curren']; ?>&nbsp; A</td>
                                            <td><?php echo $row['voltage']; ?>&nbsp; V</td>
                                            <td><?php echo $row['powerr']; ?>&nbsp; W</td>
                                            <td><?php echo $row['Total_yield']; ?>&nbsp;Wh </td>
                                        </tr>	
                                        <?php
                                        }
                                        ?>
                                    </tbody>

                                </table>
                                <?php mysqli_close($db); // Close connection ?>


                            </div>

                        </div>
                    </div>

          </div> 
          
        
    </section>   
  </section>
  
 
    <style>
        	body {
      font-family: 'Poppins', sans-serif;
	  background-color: #E4E9F7;
	  
	  
   }
        table{
            position:absolute;
        }

        .right{
            padding-left:70px;
        }
        
       .section #from_date{
           margin-left: 70px;
        }
        .section #to_date{
           margin-left: 70px;
        }
        .section #filter{
           margin-left: 70px;
        }


    </style>
    
  <script src="js/General%20Information%20script.js"></script>
    
 <script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"js/filter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>
             
    
    
</body>
</html>
