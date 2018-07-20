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
 
 $qryup=("update maincat set maincat='".$_POST['maincat']."' where id='".$id."'");

 $conn->query($qryup);
 echo '<script>
 alert("Maincat update sucssfully");
 window.location="maincatlist.php";
</script>';

 }



 ?>



 
 <?php 
  // data fetch and show text box particular id

 $id=$_GET['id'];

$sql = "select * from maincat where id='".$id."'";
$res = $conn->query($sql);

while($sql = $res->fetch_assoc())
{
 $id=$sql['id'];
 $maincat=$sql['maincat'];
 
 }

   ?>






 <div style="text-align: center; margin: 100px"> 

 <form method="post" action="">

           <input type="hidden" name="name" value="<?php  echo $id;?>"><br>
          maincat: <input type="text" name="maincat" value="<?php  echo $maincat;?>"><br>
          
          <input type="submit" name="button" value="Save">
            


                    


                  </form>

</div>





</body>
</html>
<?php
include"footer.php";
?>



