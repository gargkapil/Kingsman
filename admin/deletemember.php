<?php
include "../connection.php";



echo $id=$_GET['id'];
$sql="delete from member where id='".$id."'";
$conn->query($sql);
echo '<script> 
alert("Deleted member successfully");
window.location="memberlist.php";
</script>';
?>
