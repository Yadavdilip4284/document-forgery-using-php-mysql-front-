<?php 
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
include 'include/dbconn.php';
include("include/session.php");
$club_row=checkUser();

$id=$conn->real_escape_string(trim($_POST['id']));
$first_name=$conn->real_escape_string(trim($_POST['first_name']));
$last_name=$conn->real_escape_string(trim($_POST['last_name']));
$password=md5($conn->real_escape_string($_POST['password']));

	
	
$queryUpdateProduct=$conn->query("update users set first_name='$first_name', last_name='$last_name', password='$password' where id='$id'");	
	
header("location:editProfile.php?id=$id");
	
?>

