<?php
include_once ('./connection.php');
if(isset($_POST['submit']))
  {

  $username = $_POST['username'];
  $pass = $_POST['password'];
 

if($type== "Student")
{
    $sql = "SELECT password FROM account WHERE userName='$username';";
    $result = mysqli_query($con,$sql);
    if($result== null)
    {

    }else{
        $row = mysqli_fetch_array($result);
        $Upassword = $row[0];
        if($Upassword==$pass)
        {
            header("Location: ../../request/request.php?user=". $username ."");
        }else
        {

        }
       
    }

}

}
?>