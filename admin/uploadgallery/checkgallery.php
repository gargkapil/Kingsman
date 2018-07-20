<?php
include('../../connection.php');

define ("DIR","uploadgallery/");

if(is_uploaded_file($_FILES['video']['tmp_name'])){
	
/*if($_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']=="image/gif" ||$_FILES["image"]["type"] == "image/jpg" ||$_FILES['image']['type']=="image/gif" ||$_FILES["image"]["type"] == "image/png"){*/
	if($_FILES['video']['type']=="video/mov" || $_FILES['video']['type']=="video/3gp" ||$_FILES["video"]["type"] == "video/mp4" ||$_FILES['video']['type']=="video/webm" ||$_FILES["video"]["type"] == "video/ogg"){

$name=$_POST['name'];
$uploadname = $_FILES['video']['name'];

						  

//$file=DIR."$uploadname";

move_uploaded_file($_FILES['video']['tmp_name'],$uploadname);


	$qry="insert into gallery (name,image) values('".$name."','".$uploadname."')";
	$conn->query($qry);


?>

<script type="text/javascript">
alert("Result Uploaded");
window.location.href='../gallerylist.php';</script> 
<?php
}
else
?>
<script type="text/javascript">alert("Result not Uploaded");window.location.href='../gallerylist.php';</script>
<?php
}
else
?>

<script type="text/javascript">alert("Please check the file format");window.location.href='../gallerylist.php';</script>
