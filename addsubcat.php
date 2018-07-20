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
include "connection.php";
  if(isset($_POST['button']))
  {
  mysqli_query($conn, "INSERT INTO member (name, Username, email,password,rating) 
    values ('".$_POST['name']."','".$_POST['username']."','".$_POST['email']."','".$_POST['password']."','".$_POST['rating']."')") or die(mysql_error());
  mysqli_query($conn, "INSERT INTO subcat(maincatid,subcat) 
    values ('".$_POST['maincatid']."', '".$_POST['subcat']."')") or die($conn->error());


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
    MainCatId
                        <select name="maincatid">
                       <option>--Select MainCat--</option>

                       <?php 

                        $qry="select * from maincat";
                        $res=$conn->query($qry);
                        while($row=$res->fetch_array())
                        {

                       ?>

                          <option value ="<?php echo $row['id']; ?>"> <?php echo $row['maincat']; ?></option>

                           <?php 
              }
                           ?>


                        </select><br> <br> 

                     Subcat<select name="maincatid">
                       <option>--Select SubCat--</option>

                       <?php 

                        $qry="select * from subcat";
                        $res=$conn->query($qry);
                        while($row=$res->fetch_array())
                        {

                       ?>

                          <option value ="<?php echo $row['id']; ?>"> <?php echo $row['subcat']; ?></option>

                           <?php 
              }
                           ?>


                        </select><br> <br> 
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