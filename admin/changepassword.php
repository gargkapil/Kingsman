<?php
session_start();
include "header.php";
include "../connection.php";
include "menu.php";
if($_SESSION['id']=="")
 {
 echo '<script>
 window.location="index.php"; 
 </script>';

 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>KINGSMAN</title>
      <link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
  <div style="margin:100px">
	<table >
  <tr>
    
    <td style="width: 100px;">
    	<?php
 $id=$_SESSION['id'];
$qry="select * from admin where id='".$id."'";
$res=$conn->query($qry);
 $res1=$res->fetch_assoc();
$oldpassword=$res1['password'];
?>

    	


  <?php
  $id=$_SESSION['id'];
  if(isset($_POST['button']))
  {
  	if($oldpassword==$_POST['oldpassword'])
  	{
  		if($_POST['newpassword']==$_POST['cpassword'])
      {
      $qryup="update admin set password='".$_POST['newpassword']."'where id='".$id."'";
  		$conn->query($qryup);
  		echo '<script>
 alert("password changed successfully");
 window.location="welcome.php";
 </script>';
}
else
{
  echo '<script>
      alert(" New password did not match");
      </script>';
}
}

else
    { 
  echo '<script>
      alert("Old password is incorrect");
      </script>';
  }  
  }


    	?>

    	<form  method="post" action="" name="changepass">
        <div class="container">
  Old Password:<input type="text" name="oldpassword" 
  value=""><br>
  New Password:<input type="text" name="newpassword" value=""><br>Confirm Password:<input type="text" name="cpassword" value=""><br> 
     <input style="float: right;" class="btn btn-info" type="submit" name="button" value="Submit"><br>
   
       



     </form> 
   </div>
      </td>
    
</table>
</div>




</body>
</html>
<?php 

 include "footer.php";

?>