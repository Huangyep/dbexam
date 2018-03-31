<?php
$con =mysqli_connect("localhost:3306","root","","Student");
if (!$con)
	{
		die('无法连接: ' . mysqli_error($con));
	}

$sql="INSERT INTO Student (Sno, Sname, Sage)
VALUES('$_POST[Sno]' , '$_POST[Sname]' , '$_POST[Sage]')";

if ($con->query($sql)== TRUE)
  {
	echo "1条数据已添加<br>";
  }
else
  {
	die('插入数据出错： ' . mysqli_error($con));
  }
mysqli_close($con);


?>