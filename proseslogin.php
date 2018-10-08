<?php
 
 session_start();
 $user = array(
"nama" => "Administrator";
"username" => "aulia";
"password" => "5555";
 );
 if ($_POST["username"] == $user["username"] && $_POST["password"] == $user["password"]) {
 	$_SESSION["username"] = $_POST["username"];
 	$_SESSION["password"] = $_POST["password"];
 	header("Location: jurnal.php");

 }else{
 	echo "gagal login";
 
 }
 ?>