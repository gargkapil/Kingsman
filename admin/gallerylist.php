
<?php 
session_start();
 include"../connection.php";
 include"header.php";
 include"menu.php";
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
	<title></title>
	<!--<style type="text/css">
.fsd {
	color: rgb(255,255,255);
}
table, td, th {
    border: 10px solid black;
    margin: 200px;
}

table {
    border-collapse: collapse;
    width: 100%;

}

th {
    text-align: left;
}
</style>-->
</head>
<body>
  <div style="margin: 70px">
  
</div>

  <div class="container">

<table class="table table-hover" >
  <thead>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
    </tr>
    <tr>
      <th><a href="addimage.php">addvideo</a></th>
    </tr>
  <tr>
    
    <th  scope="col">Name</th>
    <th  scope="col">video</th>
    <th  scope="col">Edit</th>
    <th  scope="col">Delete</th>
    
    
    
  </tr>
  </thead>


<?php

$sql = "SELECT * FROM gallery";
$res = $conn->query($sql);

while($sql = $res->fetch_assoc())
{
 $id=$sql['id'];
 $name=$sql['name'];
 $video=$sql['video'];
 
 

  ?> 

  <tr>
    <td><?php echo $name;?></td>
    <td><?php echo $video?></td>
    
    <td><a href="imageedit.php?id=<?php echo $id;?> "> edit</a></td>
    <td><a href="imagedelete.php?id=<?php echo $id;?> ">Delete</a></td>
  </tr>
 <?php 

}
  ?> 

  



</table>

</div>
<div style="margin: 300px">
  
</div>



</body>
</html>
<?php 

 include"footer.php";
?>