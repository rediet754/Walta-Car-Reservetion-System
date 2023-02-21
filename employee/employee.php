<?php
@include "../connection/connection.php";


  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
if(isset($_POST['submit'])){
$fullname = mysqli_real_escape_string($conn,$_POST['fname']);
$phonenumber = mysqli_real_escape_string($conn,$_POST['phonenumber']);
$department= mysqli_real_escape_string($conn,$_POST['department']);
$depid="select depId from department where depName = '$department'  ";
mysqli_query($conn,$depid);
$insert = "insert into employee (fullName,	phoneNumber , depId) VALUES ('$fullname','$phonenumber','$depid')";
                
mysqli_query($conn,$insert);

};






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add employee</title>
    <link href="../img/logo.png"   rel="icon">
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
         <h2>የሰራተኞች መመዝገቢያ ፎርም</h2>
              <form action="" method="post">
               <div class="input-field">
         <label>ሙሉ ስም</label><br/>
         <input class="inputs" type="text" placeholder="Enter department Name" name="carname" required  />
       </div>
  <div class="input-field">
         <label>ስልክ ቁጥር</label><br/>
         <input class="inputs" type="text" placeholder="Enter department Name" name="carname" required  />
       </div> 
           <div class="input-field">
         <label>ዲፓርትመንት</label><br/>
         <input class="inputs" type="text" placeholder="Enter department Name" name="carname" required  />
       </div> 
           <?php 
       
            $departmentname="select depName from department ";
            $result=mysqli_query($conn,$departmentname);
          echo "<select name='department' required>";
          echo"<option disabled selected></option>";
           while ($row = mysqli_fetch_array($result)){
            echo "<option value= '" .$row['depName'] ."'>" . $row['depName'] ."</option>";
           }
           echo "</select>"
          ?>

     </select>
      </div>
      <div class="buttons">
        <button type="submit" name="submit">
          <i class="material-symbols-outlined">save</i>
          ይመዝግቡ</span>
        </button>
       </div>
          </form>
      </div>
    </div>
</div>
   <script type="text/javascript" src="../JS/index.js"></script>
</body>
</html>