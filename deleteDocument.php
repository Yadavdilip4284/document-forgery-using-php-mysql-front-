<?php 
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
include 'include/dbconn.php';
include("include/session.php");
$club_row=checkUser();

$id = $_GET['id'];

$query="DELETE FROM documents WHERE id='".$id."';";

if ($conn->query($query) === TRUE) {
  header("location:documentList.php");
} else {
	header("location:documentList.php?st=not deleted");
}
	
?>

