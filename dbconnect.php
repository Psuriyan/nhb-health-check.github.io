<?php

	ini_set('display_errors', 1);
	error_reporting(~0);
   // กำหนดตัวแปรในการเชื่อมต่อกับ database
   $serverName = "localhost";
   $userName = "root";
   $userPassword = "suriyan2514";
   $dbName = "health_check";
   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
   $conn->query("set names utf8");

   // ตรวจสอบการเชื่อมต่อกับ database
	if (mysqli_connect_errno())
	{
		echo "Database Connect Failed : " . mysqli_connect_error();
	}
	else
	{
		echo "";
	}

	mysqli_close($conn);

?>



