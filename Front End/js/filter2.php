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
                <th class="column1">Length</th>
                <th class="column1">NOM</th>
                <th class="column1">Input ID 1</th>
                <th class="column1">DC current 1</th>
                <th class="column1">DC voltage 1</th>
                <th class="column1">DC power 1</th>
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
                        <td>'. $row['pv_Length'].'</td>
                        <td>'. $row['pv_NOM'].'</td>
                        <td>'. $row['pv_id_1'].'</td>
                        <td>'. $row['pv_DC_current_1'].'&nbsp; A</td>
                        <td>'. $row['pv_DC_voltage_1'].'&nbsp;V </td>
                        <td>'. $row['pv_DC_power_1'].'&nbsp;W </td>
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