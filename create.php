<?php
$con =mysqli_connect("localhost:3306","root","");
if (!$con)
  {
  die('无法连接: ' . mysqli_error($con));
  }
 
// Create database
$sqldb="CREATE DATABASE Student";
if ($con->query($sqldb)== true)
  {
  echo "数据库创建成功<br>";
  }
else
  {
  echo "创建错误: " . mysqli_error($con);
  }
 mysqli_close($con);

// Create table in Student database
$conn = mysqli_connect("localhost:3306","root","","Student");
$sqltab = "CREATE TABLE Student 
(
Sno varchar(7),
Sname varchar(15),
Sage smallint,
PRIMARY KEY(Sno)
)";

if (mysqli_query($conn, $sqltab)) {
    echo "数据表Student创建成功";
} else {
    echo "创建错误:" . mysqli_error($conn);
}

mysqli_close($conn);

?>