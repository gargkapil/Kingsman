<?php
include('../../connection.php');

define ("DIR","uploadnews/");

if(is_uploaded_file($_FILES['image']['tmp_name'])){
	
if($_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']=="image/gif" ||$_FILES["image"]["type"] == "image/jpg" ||$_FILES['image']['type']=="image/gif" ||$_FILES["image"]["type"] == "image/png"){
$date=$_POST['date'];
echo $heading=$_POST['heading'];	
$name=$_POST['name'];
$uploadname = $_FILES['image']['date']['heading']['name'];

						  

//$file=DIR."$uploadname";




move_uploaded_file($_FILES['image']['tmp_name'],$uploadname);


echo 	$qry="insert into news (date,heading,name,image) values('".$heading."','".$name."','".$uploadname."')";
	$conn->query($qry);


?>

<script type="text/javascript">
alert("Result Uploaded");
//window.location.href='../news.php';</script> 
<?php
}
else
?>
<script type="text/javascript">alert("Result not Uploaded");//window.location.href='../news.php';</script>
<?php
}
else
?>

<script type="text/javascript">alert("Please check the file format");//window.location.href='../news.php';</script>
