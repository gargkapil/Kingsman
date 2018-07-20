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
 
 $qryup=("update news set heading='".$_POST['heading']."',name='".$_POST['name']."',fullnews='".$_POST['fullnews']."', image='".$_POST['image']."'where id='".$id."'");

 $conn->query($qryup);
 echo '<script>
 alert("image updated sucssfully");
 window.location="news.php";
</script>';

 }



 ?>



 
 <?php 
  // data fetch and show text box particular id

 $id=$_GET['id'];

$sql = "select * from news where id='".$id."'";
$res = $conn->query($sql);

while($sql = $res->fetch_assoc())
{
 $id=$sql['id'];
 $date=$sql['date'];
 $heading=$sql['heading'];
 $name=$sql['name'];
 $fullnews=$sql['fullnews'];
 $image=$sql['image'];
 
 }

   ?>






 <div style="text-align: center; margin: 100px"> 

 <form method="post" action="">

           
           heading: <input type="text" name="heading" value="<?php  echo $heading;?>"><br>
          Name: <input type="text" name="name" value="<?php  echo $name;?>"><br>
          Fullnews: <input type="text" name="fullnews" value="<?php  echo $fullnews;?>"><br>
          <div style=" margin-left: 525px; height: 50px;width: 30px; ">
          <br><label for="uname"><b>image</b></label><br><input type="file" placeholder="Enter image" value="<?php  echo $image;?>" name="image" value="<?php  echo $image;?>" >
</div>


          
         <br> <input type="submit" name="button" value="Save">
            


                    


                  </form>

</div>





</body>
</html>
<?php
include"footer.php";
?>



