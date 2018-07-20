<?php
include('../../connection.php');

define ("DIR","uploadnews/");

if(is_uploaded_file($_FILES['image']['tmp_name'])){
	
if($_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']=="image/gif" ||$_FILES["image"]["type"] == "image/jpg" ||$_FILES['image']['type']=="image/gif" ||$_FILES["image"]["type"] == "image/png"){

 $heading=$_POST['heading'];	
$name=$_POST['name'];
$fullnews=$_POST['fullnews'];
$uploadname = $_FILES['image']['name'];

						  

$file=DIR."$uploadname";




move_uploaded_file($_FILES['image']['tmp_name'],$uploadname);


 	$qry="insert into news (heading,name,fullnews,image) values('".$heading."','".$name."','".$fullnews."','".$uploadname."')";
	$conn->query($qry);


?>

<script type="text/javascript">
alert("Result Uploaded");
window.location.href='../news.php';</script> 
<?php
}
else
?>
<script type="text/javascript">alert("Result not Uploaded");
window.location.href='../news.php';</script>
<?php
}
else
?>

<script type="text/javascript">alert("Please check the file format");window.location.href='../news.php';</script>
