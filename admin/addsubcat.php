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
  mysqli_query($conn, "INSERT INTO subcat(maincatid,subcat) 
    values ('".$_POST['maincatid']."', '".$_POST['subcat']."')") or die($conn->error());

echo '<script>
alert("subcat added");
window.location="subcatlist.php";
</script>';
  }


?>





     <div class="container" style="margin-left: 500px; width: auto;"> 

 
                        <form method="post" action="" enctype="multipart/form-data">
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

                      
                     Subcat<input type="text" name="subcat" value=""><br>
                <input type="submit" name="button" value="Save"><br> 
                      </form>
  </div></td>
</tr>
</table>
</div>
</body>
</html>
<?php 

 include "footer.php";

?>