
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

$query = "SELECT * FROM member order by id DESC LIMIT $start_from, $record_per_page";
$result = mysqli_query($connect, $query);

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <style>
.pagination {
    display: inline-block;
    position: absolute;
    bottom: 100px;
    right: 100px;

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
      <td>
        <form method="post" action="" name="searchform">
          Search <input type="text" value="" name="search">
          <input type="submit" name="button" value="search">
        </form>
      </td>
    </tr>

  <tr>
    
    <th  scope="col">Name</th>
    <th  scope="col">username</th>
    
    <th  scope="col">Email</th>
    <th  scope="col">Password</th>

    <th  scope="col">rating</th>
    <th  scope="col">Edit</th>
    <th  scope="col">Delete</th>
    
  </tr>
  </thead>

  <?php
if(isset($_POST['search']))
  
{
  $sql = "SELECT * FROM member where name LIKE '%".$_POST['search']."%' ";
  $res = $conn->query($sql);
}
else
{
$query = "SELECT * FROM member order by id DESC LIMIT $start_from, $record_per_page";
$res = mysqli_query($connect, $query);

  //$sql="select * from {$statement} limit {$startpoint}, {$limit}";
 // $res=$conn->query($sql );


}
     while($sql = mysqli_fetch_array($res))
{
 $id=$sql['id'];
 $name=$sql['name'];
 $username=$sql['username'];
 
 $email=$sql['email'];
 $password=$sql['password'];
 $rating=$sql['rating'];
 

  ?> 

  <tr>
    <td><?php echo $name;?></td>
    <td><?php echo $username;?></td>
    
    <td><?php echo $email;?></td>
    <td><?php echo $password;?></td>
    <td><?php echo $rating;?></td>
    <td><a href="editmember.php?id=<?php echo $id;?> "> edit</a></td>
    <td><a href="deletemember.php?id=<?php echo $id;?> ">Delete</a></td>
  </tr>
 <?php 

}
  ?> 

  



</table>
<div class="pagination">

<?php
    $page_query = "SELECT * FROM member ORDER BY id DESC";
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
     echo "<a href='memberlist.php?page=1'>First</a>";
     echo "<a href='memberlist.php?page=".($page - 1)."'><<</a>";
    }

    for($i=1; $i<=$total_pages; $i++)
    {     
     echo "<a href='memberlist.php?page=".$i."'>".$i."</a>";
    }

    if($page <= $end_loop)
    {
     echo "<a href='memberlist.php?page=".($page + 1)."'>>></a>";
     echo "<a href='memberlist.php?page=".$total_pages."'>Last</a>";
    }
    
    
    ?>
</div>

<!-- <div style="padding-left: 500px;padding-top: 20px; "> <?php //echo pagination($statement,$limit,$page);?>-->


</div>
<div style="margin: 300px">
  
</div>



</body>
</html>
<?php 

 include"footer.php";
?>