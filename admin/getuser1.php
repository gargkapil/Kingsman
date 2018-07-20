

<?php
include "../connection.php";

$q = intval($_GET['q']);

$qry="select * from subcat where maincatid='".$q."'";
$result=mysql_query($qry);
?>


 <select name="subcat" class="form-control1">
<?php
echo "subcat"; 
while($row = mysql_fetch_array($result)) {
   ?>


   <option value="<?php echo $row['id'];?>"><?php echo $row['subcat'];?></option>   
 

<?php 
}
?>
 </select>

