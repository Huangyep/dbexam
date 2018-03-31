<?php

$con = mysqli_connect("localhost:3306","root","","Student");
if (!$con)
  {
  die('无法连接: ' . mysqli_error($con));
  }
  
mysqli_query($con,"DELETE FROM Student WHERE Sno='$_POST[Sno]'");

if (mysqli_affected_rows($con)>0){	
	echo "删除成功";
}else{
	echo "数据表中不存在Sno=$_POST[Sno]的数据";
}

mysqli_close($con);

?>

