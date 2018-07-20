<?php 

 include "header.php";
?>

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
      <th><a href="addsubcat.php">addsubcat</a></th>
    </tr>
  <tr>
    
    <th style="font-weight: 1000;" scope="col">maincatid</th>
    <th style="font-weight: 1000;" scope="col">subcat</th>
    <th  style="font-weight: 1000;" scope="col">Edit</th>
    <th  style="font-weight: 1000;" scope="col">Delete</th>
    
    
    
  </tr>
  </thead>


<?php

$sql = "SELECT * FROM subcat";
$res = $conn->query($sql);

while($sql = $res->fetch_assoc())
{
 $id=$sql['id'];
 $maincatid=$sql['maincatid'];
 $subcat=$sql['subcat'];
 
 

  ?> 

  <tr>
    <td><?php echo $maincatid;?></td>
    <td><?php echo $subcat;?></td>
    
    <td><a href="subcatedit.php?id=<?php echo $id;?> "> edit</a></td>
    <td><a href="subcatdelete.php?id=<?php echo $id;?> ">Delete</a></td>
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
