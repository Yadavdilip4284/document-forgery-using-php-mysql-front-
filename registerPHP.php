<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
include("include/dbconn.php");

if($_POST['email']!= NULL && $_POST['password']!= NULL && $_POST['first_name']!= NULL && $_POST['last_name']!= NULL )
{
	$qry="SELECT email FROM users WHERE email='".$_POST['email']."'";
	$result = $conn->query($qry);
	if($result->num_rows > 0)
	{
		header("location:index.php?st=user already exist");
	}else {
	  $query = "INSERT INTO users (first_name, last_name, email,password) VALUES ('".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['email']."','".md5($_POST['password'])."')";
		if ($conn->query($query) === TRUE) {
		  // echo "New record created successfully";
		  header("location:student/index.php");
		} else {
		  echo "Error: " . $query . "<br>" . $conn->error;
		}
	}
}
else
{
	header("location:index.php?st=invalid user data");
}


?>


