<?php
include"../connection.php";
include"header.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>KINGSMAN</title>
</head>
<body>
	<?php
	$id=$_GET['id'];
 if(isset($_POST['button']))
 {
 
 $qryup=("update member set name='".$_POST['name']."', username='".$_POST['username']."', email='".$_POST['email']."', password='".$_POST['password']."',rating='".$_POST['rating']."' where id='".$id."'");

 $conn->query($qryup);
 echo '<script>
 alert("Member update sucssfully");
 window.location="memberlist.php";
</script>';

 }



 ?>



 
 <?php 
  // data fetch and show text box particular id

 $id=$_GET['id'];

$sql = "select * from member where id='".$id."'";
$res = $conn->query($sql);

while($sql = $res->fetch_assoc())
{
 $id=$sql['id'];
 $name=$sql['name'];
 $username=$sql['username'];
 
 $email=$sql['email'];
 $password=$sql['password'];
 $rating=$sql['rating'];
 }

   ?>






 <div style="text-align: center; margin: 100px"> 

 <form method="post" action="">

           <input type="hidden" name="name" value="<?php  echo $id;?>"><br>
          Name: <input type="text" name="name" value="<?php  echo $name;?>"><br>
          username: <input type="text" name="username" value="<?php  echo $username;?>"><br>
          
          Email: <input type="text" name="email" value="<?php  echo $email;?>"><br>
          Password: <input type="text" name="password" value="<?php  echo $password;?>"><br>
          rating :<input type="text" name="rating" value="<?php  echo $rating;?>"><br>
          <input type="submit" name="button" value="Save">
            


                    


                  </form>

</div>





</body>
</html>
<?php
include"footer.php";
?>



