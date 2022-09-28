<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "db");  
      $output = '';  
      $query = "  
           SELECT * FROM solar  
           WHERE date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                    <th class="column1">Table ID</th>
                    <th class="column2">Date</th>
                    <th class="column3">Device ID</th>
                    <th class="column1">current</th>
                    <th class="column1">voltage</th>
                    <th class="column1">power</th>
                    <th class="column1">Total Yield</th>  
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                            <td>'. $row['id'].'</td>
                            <td>'. $row['date'].'</td>
                            <td>'. $row['device_id'].'</td>
                            <td>'. $row['curren'].'&nbsp; A</td>
                            <td>'. $row['voltage'].'&nbsp; V</td>
                            <td>'. $row['powerr'].'&nbsp; W</td>
                            <td>'. $row['Total_yield'].'&nbsp;Wh </td>
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>