<?php
include "../connection.php";



 $id=$_GET['id'];
$sql="delete from gallery where id='".$id."'";
$conn->query($sql);
echo '<script> 
alert("Deleted video successfully");
window.location="gallerylist.php";
</script>';
?>
