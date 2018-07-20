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




<form action="uploadnews/checknews.php" method="post" enctype="multipart/form-data" >
  <div class="container" ">
    
    <br><br><label for="uname"><b>Heading</b></label>
    <input type="text" placeholder="Enter heading" name="heading" required>

  <br><br><label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
    <br><br><label for="uname"><b>Fullnews</b></label>
    <input type="text" placeholder="Enter complete news" name="fullnews" required>



    <br><br><label for="uname"><b>image</b></label>
    <input type="file" placeholder="Enter image" name="image" required>

   
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