<?php 

 include "header.php";

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<div style="margin: 100px; height: 300px;">
  <div align="center" style="height: 100px; width: 100px;">

 <table style="margin-top: 200px;">
 <tr> 
 <td style="width: 100px;"> 
<form action="checklogin.php" method="post" >
  

  <div class="container" ">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
     <input type="submit" name="button" value="login" style="width:100px; float: right" class="btn btn-info">
    
    
  </div>

  <div class="container" style=" ; width: 10%;float: right; text-align: center; margin-top: 20px; " >
  
    <span style="text-align: center;">Forgot <a href="#">password?</a></span>
  </div>
</form>
</td>
</tr>
</table>

</div>
  
</div>


</body>
</html>

<?php 

 include "footer.php";

?>