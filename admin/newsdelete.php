<?php
include "../connection.php";



 $id=$_GET['id'];
$sql="delete from news where id='".$id."'";
$conn->query($sql);
echo '<script> 

window.location="news.php";
</script>';
?>
