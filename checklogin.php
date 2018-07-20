<?php
session_start();
include "connection.php";
$email=$_POST['email'];
$password=$_POST['password'];

if(isset($_POST['button']))
{
	$sql="select * from member where email= '".$email."' and password='".$password."' ";
	$res=$conn->query($sql);
	$res1=$res->fetch_assoc();
	if($res1!="")
	{
		 $_SESSION['id']=$res1['id'];
		 
  $_SESSION['email']=$res1['email'];

		echo '<script>
		alert(" login successfully");
		window.location="index.php";
		</script>';

	}
	else
	{
		echo '<script>
		alert("admin login unsuccessfully");
		window.location="login.php";
		</script>';
	}
}
?>
