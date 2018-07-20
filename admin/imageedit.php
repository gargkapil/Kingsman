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
 
 $qryup=("update gallery set name='".$_POST['name']."', video='".$_POST['video']."'where id='".$id."'");

 $conn->query($qryup);
 echo '<script>
 alert("video updated sucssfully");
 window.location="gallerylist.php";
</script>';

 }



 ?>



 
 <?php 
  // data fetch and show text box particular id

 $id=$_GET['id'];

$sql = "select * from gallery where id='".$id."'";
$res = $conn->query($sql);

while($sql = $res->fetch_assoc())
{
 $id=$sql['id'];
 $name=$sql['name'];
 $video=$sql['video'];
 
 }

   ?>






 <div style="text-align: center; margin: 100px"> 

 <form method="post" action="">

           <input type="hidden" name="name" value="<?php  echo $id;?>"><br>
          Name: <input type="text" name="name" value="<?php  echo $name;?>"><br>
          video: <input type="text" name="images" value="<?php  echo $video;?>"><br>
          
          <input type="submit" name="button" value="Save">
            


                    


                  </form>

</div>





</body>
</html>
<?php
include"footer.php";
?>



