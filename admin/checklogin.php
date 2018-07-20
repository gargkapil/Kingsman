<?php
session_start();
include "../connection.php";
$username=$_POST['username'];
$password=$_POST['password'];

if(isset($_POST['button']))
{
	$sql="select * from admin where username= '".$username."' and password='".$password."' ";
	$res=$conn->query($sql);
	$res1=$res->fetch_assoc();
	if($res1!="")
	{
		 $_SESSION['id']=$res1['id'];
  $_SESSION['username']=$res1['username'];

		echo '<script>
		alert("admin login successfully");
		window.location="welcome.php";
		</script>';

	}
	else
	{
		echo '<script>
		alert("admin login unsuccessfully");
		window.location="index.php";
		</script>';
	}
}
?>
