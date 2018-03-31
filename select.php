<?php
$con = mysqli_connect("localhost:3306","root","","Student");
if (!$con)
  {
  die('无法连接: ' . mysqli_error($con));
  }

$sql = "SELECT Sno,Sname,Sage FROM Student";
$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0 ){

	echo "<table border='1' cellpadding='8'>
	<caption>学生信息表</caption>
	<tr>
	<th>Sno</th>
	<th>Sname</th>
	<th>Sage</th>
	</tr>";	
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td>" . $row['Sno'] . "</td>";
		echo "<td>" . $row['Sname'] . "</td>";
		echo "<td>" . $row['Sage'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
}
else{
	echo "无结果";
}

mysqli_close($con);
?>

