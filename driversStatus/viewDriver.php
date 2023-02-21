<?php 
include_once '../connection/connection.php';
ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>driver status</title>
</head>
<body>
<div class="table-container">
              <table>
                <thead>
                  <tr>
                    <th>Driver ID</th>
                    <th>Full Name</th>
                    <th>Moblie</th>
                    <th>Driving licence No</th>
                    <th>Status</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
                  $sql = "SELECT driverId,driverFullName,driverPhoneNumber,driverLicenceId,driverStatus FROM driver";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_array($result)) {
                    echo "
            <tr class='rows'>
            <td>" . $row["driverId"] . "</td>
            <td>" . $row["driverFullName"] . "</td>
            <td>" . $row["driverPhoneNumber"] . "</td>
            <td>" . $row["driverLicenceId"] . "</td>
            <td>" . $row["driverStatus"] . "</td>
            
      
            <tr>
        ";
                  }
                  ?>
                </tbody>
              </table>
            </div>

    
</body>
</html>