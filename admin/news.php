
<?php 
session_start();
 include"../connection.php";
 include"header.php";
 include"menu.php";
 if($_SESSION['id']=="")
 {
 echo '<script>
 window.location="index.php"; 
 </script>';

 }


?>
<?php 

$connect = mysqli_connect("localhost", "root", "", "kingsdata");
$record_per_page = 5;
$page = '';
if(isset($_GET["page"]))
{
 $page = $_GET["page"];
}
else
{
 $page = 1;
}

$start_from = ($page-1)*$record_per_page;

$query = "SELECT * FROM news order by id DESC LIMIT $start_from, $record_per_page";
$result = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--<style type="text/css">
.fsd {
	color: rgb(255,255,255);
}
table, td, th {
    border: 10px solid black;
    margin: 200px;
}

table {
    border-collapse: collapse;
    width: 100%;

}

th {
    text-align: left;
}
</style>-->
<style>
.pagination {
    display: inline-block;

}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
    border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
}
</style>

</head>
<body>
  <div style="margin: 70px">
  
</div>

  <div class="container">

<table class="table table-hover" >
  <thead>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
    </tr>
    <tr>
      <th><a href="addnewsimage.php">addnews</a></th>
    </tr>
     
    <tr>
      <td>
        <form method="post" action="" name="searchform">
          <div class="flex-container">
            <div>
          Search <input  type="text" value="" name="search">
          </div>
          <div> <input  type="submit" name="button" value="search"></div>
        </div>
          
        </form>
      </td>
    </tr>

  <tr>
    <th  scope="col">Date</th>
    <th  scope="col">Heading</th>
    <th  scope="col">Name</th>
    <th  scope="col">Fullnews</th>
    <th  scope="col">images</th>
    <th  scope="col">Edit</th>
    <th  scope="col">Delete</th>
    
    
    
  </tr>
  </thead>


<?php
if(isset($_POST['search']))
  
{
  $sql = "SELECT * FROM news where name LIKE '%".$_POST['search']."%' ";
  $res = $conn->query($sql);
}
else
{
$query = "SELECT * FROM news order by id DESC LIMIT $start_from, $record_per_page";
$res = mysqli_query($connect, $query);

  //$sql="select * from {$statement} limit {$startpoint}, {$limit}";
 // $res=$conn->query($sql );


}

//$sql = "SELECT * FROM news";
//$res = $conn->query($sql);

while($sql = $res->fetch_assoc())
{
 $id=$sql['id'];
 $date=$sql['date'];
 $heading=$sql['heading'];
 $name=$sql['name'];
  $fullnews=$sql['fullnews'];

 $images=$sql['image'];
 
 

  ?> 

  <tr>
     <td><?php echo $date;?></td>
      <td><?php echo $heading;?></td>

    <td><?php echo $name;?></td>

    <td><?php echo $fullnews;?></td>
    <td><?php echo $images?></td>
    
    <td><a href="newsedit.php?id=<?php echo $id;?> "> edit</a></td>
    <td><a href="newsdelete.php?id=<?php echo $id;?> ">Delete</a></td>
  </tr>
 <?php 

}
  ?> 

  



</table>
<div class="pagination">

<?php
    $page_query = "SELECT * FROM news ORDER BY id DESC";
    $page_result = mysqli_query($connect, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 5)
    {
     $start_loop = $total_pages - 5;
   }

    
    $end_loop = $start_loop + 4;

    if($page > 1)
    {
     echo "<a href='news.php?page=1'>First</a>";
     echo "<a href='news.php?page=".($page - 1)."'><<</a>";
    }

    for($i=1; $i<=$total_pages; $i++)
    {     
     echo "<a href='news.php?page=".$i."'>".$i."</a>";
    }

    if($page <= $end_loop)
    {
     echo "<a href='news.php?page=".($page + 1)."'>>></a>";
     echo "<a href='news.php?page=".$total_pages."'>Last</a>";
    }
    
    
    ?>
</div>


</div>
<div style="margin: 300px">
  
</div>



</body>
</html>
<?php 

 include"footer.php";
?>