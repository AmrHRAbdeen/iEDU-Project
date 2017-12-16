<?php 

session_start();
include("connect.php");

//if($_POST['descriptionSave']){ // if you save it will be updated...
	
$query="UPDATE `users` SET `description`='".mysqli_real_escape_string($link,$_POST['description'])."' WHERE id='".$_SESSION['id']."' LIMIT 1";
mysqli_query($link, $query);

//}
?>
