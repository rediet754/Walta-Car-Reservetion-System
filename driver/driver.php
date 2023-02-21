<?php
@include "../connection/connection.php";


  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
if(isset($_POST['submit'])){
$fullname = mysqli_real_escape_string($conn,$_POST['fname']);
$phonenumber = mysqli_real_escape_string($conn,$_POST['phonenumber']);
$licencenumber= mysqli_real_escape_string($conn,$_POST['licencenumber']);
$insert = "INSERT INTO driver (driverFullName,	driverPhoneNumber , driverLicenceId) VALUES ('$fullname','$phonenumber','$licencenumber')";
                
mysqli_query($conn,$insert);

};



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add driver</title>
    <link href="../img/mainlogo.ico"   rel="icon">
    <link rel="stylesheet" href="../request/request.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
   <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class=nav>
    <img src="../img/mainlogo.ico"></img>
 <div class="ul">
   <ul>
    <li>
      <a href="../car/car.php">
    የመኪና መመዝገቢያ
      </a>
    </li>
  </ul>
    <ul>
    <li>
      <a href="../department/department.php">
        ዲፓርትመንት መመዝገቢያ
      </a>
    </li>
  </ul>
    <ul>
    <li>
      <a href="../employee/employee.php">
      ሰራተኞች መመዝገቢያ
      </a>
    </li>
  </ul>
    <ul>
    <li>
      <a href="../driversStatus/viewDriver.php">
       DriverStatus
      </a>
    </li>
  </ul>
   <ul>
    <li>
      <a href="../driver/driver.php">
       ሹፌሮች መመዝገቢያ
      </a>
    </li>
  </ul>
    <ul>
    <li>
      <a href="../login/index.html">
        Login
      </a>
    </li>
  </ul>
  <ul>
    <li>
        <a href="#">Logout</a>
    </li>
  </ul>
 </div>
 <div class="humburger">
  <span class="span" ></span>
  <span class="span" ></span>
  <span class="span" ></span>
 </div>
  </div>
   <div class="all_pack">
     <div class="form">
      <div class="form-pack">  
        <h2>የሹፌሮች መመዝገቢያ ፎርም</h2>
     <form action="" method="post">
      <div class="input-field">
         <label>ሙሉ ስም</label><br/>
         <input class="inputs" type="text" placeholder="Enter Full Name" name="carname" required  />
       </div> 
       <div class="input-field">
         <label>ስልክ ቁጥር</label><br/>
         <input class="inputs" type="text" placeholder="Enter phone number" name="carname" required  />
       </div> 
       <div class="input-field">
         <label>የመንጃ ፈቃድ ቁጥር</label><br/>
         <input class="inputs" type="text" placeholder="Enter license Plate" name="carname" required  />
       </div> 
        <button class="buttons" type="submit" name="submit">
          <!-- <i class="material-symbols-outlined lables"></i> -->
          <span class="btnText lables">ይመዝግቡ</span>
        </button>
    
      </form> </div>
  </div>
   </div>
     <script type="text/javascript" src="../JS/index.js"></script>
</body>
</html>