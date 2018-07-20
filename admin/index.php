
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
   
<div style="margin: 150px;" >

 <table>
 <tr> 
 <td style="width: 100px;"> 
<form action="checklogin.php" method="post" >
  

  <div class="container" ">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
     <input type="submit" class="btn btn-info" style="width:100px; float: right;" name="button" value="Login">
      </div>

  <div class="container" style="background-color:#f1f1f1; width: 20%; float: right;"> 
  
    <span class="psw">Forgot <a href="#">password?</a></span>
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