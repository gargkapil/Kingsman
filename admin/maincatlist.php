
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
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

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
      <th><a href="addmaincat.php">addmaincat</a></th>
    </tr>
  <tr>
    
    <th  scope="col">maincat</th>
    <th  scope="col">Edit</th>
    <th  scope="col">Delete</th>
    
    
    
  </tr>
  </thead>


<?php

$sql = "SELECT * FROM maincat";
$res = $conn->query($sql);

while($sql = $res->fetch_assoc())
{
 $id=$sql['id'];
 $maincat=$sql['maincat'];
 
 

  ?> 

  <tr>
    <td><?php echo $maincat;?></td>
    
    <td><a href="maincatedit.php?id=<?php echo $id;?> "> edit</a></td>
    <td><a href="maincatdelete.php?id=<?php echo $id;?> ">Delete</a></td>
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