<?php
$servername = "mysql.hostinger.com.hk";
$username = "u301902082_me";
$password = "hindex";
$dbname = "u301902082_index";

		
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
die("無法建立資料庫連線!". mysqli_connect_error());

		
//QLStr= "SELECT COUNT(school) FROM ask_test WHERE school='真理大學'";
$SQLStr= "SELECT COUNT(*) FROM fbdata";
$result = mysqli_query($conn,$SQLStr);
$row= mysqli_fetch_array($result);
$total= $row[0];
echo $total ;

/*
$SQLStr= "SELECT school,COUNT( school ) FROM ask_test GROUP BY school";
$result = mysqli_query($conn,$SQLStr) ;
	if (result) {
		while ($row= mysqli_fetch_array($result)) {
			if ($row[0]=='真理大學') {
				$au=$row[1];
			}
			else
				$tku=$row[1];		
			}
		$school= array('80','70');
		echo $school;
	}
*/
?>