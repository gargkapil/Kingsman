<!--<?php 

 include "header.php";

?>-->


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/login.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" data-aos="flip-up">
    <div class="container">
    <div style="margin-right: 70px;" class="search1">
      <form action="#" method="post">
        <div class="input-group">
          <input type="text" class="form-control" name="search" id="search2" placeholder="Search" required/>
          <span class="input-group-btn">
            <button style="height: 34px; " class="btn btn-default" type="submit" ><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>
    </div>
        <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><h1>KINGSMAN</h1></a>
        </div>
        
    </div>
    <div id="navbar" class="navbar-collapse collapse">
    
     <ul style="float: right;margin-top:-50px;" class="nav navbar-nav slide-nav ">
        <li><a href="signup.php">SignUp</a></li>
        <li><a href="login.php">Login</a></li>        
  
        </ul>

             </div>
</nav>


<div style="margin: 100px; height: 500px;" >

 <table>
 <tr> 
 <td style="width: 100px;"> 
<?php 
include "connection.php";
  if(isset($_POST['button']))
  {
  mysqli_query($conn, "INSERT INTO member (name, Username, email,password,rating) 
    values ('".$_POST['name']."','".$_POST['username']."','".$_POST['email']."','".$_POST['password']."','".$_POST['rating']."')") or die(mysql_error());

echo '<script>
alert("thanks for registration");
</script>';
  }


?>





<form action="" method="post" >
  <div class="container" ">
  <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>


    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="uname"><b>Rating</b></label>
    <input type="text" placeholder="Enter Rating" name="rating" required>

        <input type="submit" name="button" value="Signup" style="width:100px; float: right" class="btn btn-info">
    
    
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