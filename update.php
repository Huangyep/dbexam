<?php
$con = mysqli_connect("localhost:3306","root","","Student");
if (!$con)
  {
  die('无法连接: ' . mysqli_error($con));
  }


mysqli_query($con,"UPDATE Student SET Sno='$_POST[Sno_new]',Sname='$_POST[Sname]',Sage='$_POST[Sage]'
WHERE Sno='$_POST[Sno_old]'");
echo "受影响的行数: " . mysqli_affected_rows($con); 

mysqli_close($con);
?>

