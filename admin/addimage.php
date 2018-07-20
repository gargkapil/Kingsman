<?php 

 include "header.php";

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/login.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div style="margin: 100px">

 <table>
 <tr> 
 <td style="width: 100px;"> 
<?php 
include "../connection.php";
  if(isset($_POST['button']))
  {
  mysqli_query($conn, "INSERT INTO gallery (name, video) 
    values ('".$_POST['name']."','".$_POST['video']."')") or die(mysql_error());

echo '<script>
alert("video added");
window.location="gallerylist.php";
</script>';
  }


?>





<form action="" method="post" enctype="multipart/form-data" >
  <div class="container" ">
  <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>


    <label for="uname"><b>image</b></label>
    <input type="text" placeholder="Enter video url" name="video" required>

   
        <input type="submit" name="button" value="upload" style="width:100px; float: right" class="btn btn-info">
    
    
  </div>

  
</form>
</td>
</tr>
</table>
</div>
</body>
</html>
<?php 

 include "footer.php";

?>