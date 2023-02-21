<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>form</title>
  <!-- google icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

  <link rel="stylesheet" href="./userform.css" />
   <link rel="stylesheet" href="../css/style.css">
  <link href="/img/logo.png"   rel="icon">

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
              <!-- container -->
              <h2>የተሽከርካሪዎች ስምሪት/ፍላጎት/ መጠየቂያ ፎርም</h2>
              <form action="./server/addStudents.php" method="post">
             
               
                  <div class="personalDetails">
                    <!-- personal details conatiner -->
                    <p class="title " id="p"></p>
                    <div class="fields">
                      <!--  fields for personal details-->
                    
                      <div class="input-field">
         <label>የጠያቂ ሰራተኛ ስም</label><br/>
         <input class="inputs" type="text" placeholder="Enter Full Name" name="carname" required  />
       </div>
                    
                               <div class="input-field">
         <label>ቡክ የተደረገበት ቀን</label><br/>
         <input class="inputs" type="text" placeholder="Enter bookingdate " name="carname" required  />
       </div>
                    
                                  <div class="input-field">
         <label>ለስራ የሚወጡበት ቀን</label><br/>
         <input class="inputs" type="text" placeholder="Enter date " name="carname" required  />
       </div>
<div class="input-field">
         <label>የሚጓዝበት ምክንያት</label><br/>
         <input class="inputs" type="text" placeholder="Enter cause" name="carname" required  />
       </div>
       <div class="input-field">
                             <label>መነሻ ሰአት</label><br/>
         <input class="inputs" type="text" placeholder="Enter starting time" name="carname" required  />
       </div>
                    
        <div class="input-field">
                             <label>መመለሻ ሰአት</label><br/>
         <input class="inputs" type="text" placeholder="Enter starting time" name="carname" required  />
       </div>
                      
  <div class="input-field">
                             <label>የጉዞ ቦታ</label><br/>
         <input class="inputs" type="text" placeholder="Enter starting time" name="carname" required  />
       </div>
                        <select name="place" required>
                          <option disabled selected></option>
                          <option>ከተማ ውስጥ</option>
                          <option>ከከተማ ውጪ</option>
                        </select>
                      </div>
   <div class="input-field">
                             <label>ጉዞ የሚደረግባቸው ቦታዎች</label><br/>
         <input class="inputs" type="text" placeholder="Enter starting time" name="carname" required  />
       </div>

          <div class="input-field">
                             <label>የተጓዥ ብዛት</label><br/>
         <input class="inputs" type="text" placeholder="Enter starting time" name="carname" required  />
       </div>
                      
         <div class="input-field">
                             <label>የተጓዥ ስም ዝርዝር</label><br/>
         <input class="inputs" type="text" placeholder="Enter starting time" name="carname" required  />
       </div>            

                      <div class="buttons">
                       <button class="buttons" type="submit" name="submit">
          <!-- <i class="material-symbols-outlined lables"></i> -->
          <span class="btnText lables">ይመዝግቡ</span>
        </button>
                      </div>
                      <!-- conainer for permanet Address fields -->
                    </div>
                    <!--permanent address container  -->
                  </div>



                 </div>
</div>
                </form>
                <!-- container -->
</div>       
</div>
  <script type="text/javascript" src="../JS/index.js"></script>
 </body>
</html>
<script src="userform.js"></script>