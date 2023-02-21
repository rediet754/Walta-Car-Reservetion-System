<?php
@include "../connection/connection.php";


  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
if(isset($_POST['submit'])){
$cartype = mysqli_real_escape_string($conn,$_POST['cartype']);
$carname = mysqli_real_escape_string($conn,$_POST['carname']);
$carlicencenumber= mysqli_real_escape_string($conn,$_POST['licenceplatenumber']);
$carnumberofseat = mysqli_real_escape_string($conn,$_POST['numberofseat']);

$insert = "INSERT INTO car (carType,carName,carLicencePlateNumber,carNumberOfSeat) VALUES ('$cartype','$carname','$carlicencenumber','$carnumberofseat')";
                
mysqli_query($conn,$insert);

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add car</title>
    <link href="../img/logo.png"   rel="icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <a href="../request/request.php">Request</a>
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
     <button type="" class="languge_button"> 
          <i class="fa fa-language" style="font-size:36px"></i>
        </button>
 <div class="humburger">
  <span class="span" ></span>
  <span class="span" ></span>
  <span class="span" ></span>
 </div>
 
  </div>
   <section class="all_pack">
     <div class="form">
       <div class="form-pack">
 <h2>የመኪና መመዝገቢያ ፎርም</h2>
     <form action="" method="post">
      <div class="input-field">
         <label>የመኪና ስም</label><br/>
         <input class="inputs" type="text" placeholder="Enter Car Name" name="carname" required  />
       </div>
       <div class="input-field">
         <label>የመኪና ዓይነት</label><br>
         <input class="inputs" type="text" placeholder="Enter Model Name" name="cartype" required  />
       </div>
       <div class="input-field">
        <label>የመኪና ታርጋ ቁጥር</label><br>
        <input class="inputs"  type="text" placeholder=" Enter License Plate" name="licenceplatenumber" required  />
      </div>
      <div class="input-field">
        <label>የወንበር ብዛት</label><br>
        <input class="inputs"  type="number" placeholder="Number of Seat" name="numberofseat" required  />
      </div>
        <button class="buttons" type="submit" name="submit">
          <!-- <i class="material-symbols-outlined lables"></i> -->
          <span class="btnText lables">ይመዝግቡ</span>
        </button>
     
    </form>
       </div>
     </div> 
   </section>
     <script type="text/javascript" src="../JS/index.js"></script>
</body>
</html>