<?php
include"../connection.php";
include"header.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title>KINGSMAN</title>
</head>
<body>
  <?php
  $id=$_GET['id'];
 if(isset($_POST['button']))
 {
 
 $qryup=("update subcat set maincatid='".$_POST['maincatid']."', subcat='".$_POST['subcat']."' where id='".$id."'");

 $conn->query($qryup);
 echo '<script>
 alert("subcat update sucssfully");
 window.location="subcatlist.php";
</script>';

 }



 ?>



 
 <?php 
  // data fetch and show text box particular id

 $id=$_GET['id'];

$sql = "select * from subcat where id='".$id."'";
$res = $conn->query($sql);

while($sql = $res->fetch_assoc())
{
 $id=$sql['id'];
 $maincatid=$sql['maincatid'];
 $subcat=$sql['subcat'];
 }

   ?>






 <div style="text-align: center; margin: 100px"> 

                  <form method="post" action="" enctype="multipart/form-data">
                    <input type="hidden" name="name" value="<?php  echo $id;?>"><br>
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

                      
                     Subcat<input type="text" name="subcat" value="<?php  echo $subcat;?>"><br>
                <input type="submit" name="button" value="Save"><br> 
                      </form>

</div>





</body>
</html>
<?php
include"footer.php";
?>



