<?php

	//echo $_POST['id'];
	//echo $t2;

	//$sqlstr="insert into fbmember(id,name) values ('2','kuai')";
	//echo "<br>新增新的會員資料->".$sqlstr."<br>";
	//$rs=db_query("insert into fbmember(id,name) values ('2','kuai')");

	$servername = "mysql.hostinger.com.hk";
	$username = "u301902082_me";
	$password = "hindex";
	$dbname = "u301902082_index";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	date_default_timezone_set("Asia/Taipei");
	$sql = "insert into fbdata(personid,name,datetime,message,createdtime) values ('".$_POST["pid"]."','".$_POST["pname"]."','".date("Y-m-d H:i:s")."','".$_POST["pmessage"]."','".$_POST["pdate"]."')";
	//$sql = "insert into fbmessage(personid,message,createdtime) values('".$_POST["pid"]."','".$_POST["pmessage"]."','345345')";
	
	if ($conn->query($sql) === TRUE) {
	//echo $sql;
	//echo "New record created successfully";
	header("Location: https://goo.gl/forms/FPE7HKwoNVwzbs3K2"); 
	exit;
	
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>