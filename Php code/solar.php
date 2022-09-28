<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
date_default_timezone_set('Asia/Colombo');
     $date = date('Y/m/d h:i:s', time());

$sql = "INSERT INTO solar (date,device_id,curren,voltage,powerr,temperature,Total_yield,pv_Length,pv_NOM,pv_id_1,pv_DC_current_1,pv_DC_voltage_1,pv_DC_power_1,heat)
VALUES ('$date','".$_POST["device_id"]."','".$_POST["curren"]."','".$_POST["voltage"]."','".$_POST["Power"]."','".$_POST["temperature"]."','".$_POST["Total_yield"]."',
'".$_POST["pv_Length"]."','".$_POST["pv_NOM"]."','".$_POST["pv_id_1"]."','".$_POST["pv_DC_current_1"]."','".$_POST["pv_DC_voltage_1"]."','".$_POST["pv_DC_power_1"]."','".$_POST["ht"]."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo "\n";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>