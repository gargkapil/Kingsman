<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
session_start();
 include"connection.php";
 if(isset($_SESSION['id'])=="")
 { 
   echo '<script>
    alert("login first");
    window.location="login.php";
    </script>'; 


 
 }
 else
 {
  $id=$_SESSION['id'];


  include "header1.php";
 }
   

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike Race Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Michroma" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css -->
<style>
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 5px;
    
} 

</style>
</head>
<body>
<!-- navigation -->
<?php 
include "connection.php";
  if(isset($_POST['post']))
  {
    $mid=$_SESSION['id'];
    $qry="select * from member where id='".$mid."'";
    $res=$conn->query($qry);
    $res1=$res->fetch_assoc();
    $name=$res1['name'];
    mysqli_query($conn, "INSERT INTO ask (question,mid,name) 
    values ('".$_POST['question']."','".$mid."','".$name."')") or die(mysql_error());

  }

?>
<?php 
  include "connection.php";
  if(isset($_POST['comment']))
  {
    $mid=$_SESSION['id'];
    $qry1="select * from member where id='".$mid."'";
    $result=$conn->query($qry1);
    $result1=$result->fetch_assoc();
    $name=$result1['name'];
    mysqli_query($conn, "INSERT INTO comment (comment,qid,name) 
    values ('".$_POST['comm']."','".$_POST['qid']."','".$name."')") or die(mysql_error());

  }

?>
<?php 
            include "connection.php";
            if(isset($_POST['reply']))
              {
                $mid=$_SESSION['id'];
                $qry2="select * from member where id='".$mid."'";
                $result2=$conn->query($qry2);
                $result3=$result2->fetch_assoc();
                $name=$result3['name'];
  
    
                mysqli_query($conn, "INSERT INTO replylist (reply,cid,name) 
                values ('".$_POST['postreply']."','".$_POST['cid']."','".$name."')") or die(mysql_error());

                }

          ?>

        
<section class="inner-w3ls" >
    <div class="container ">
      <h3 class="text-center" data-aos="zoom-in">ASK</h3>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb" data-aos="zoom-in">
                    
                </ol>
            </div>
          </div>
        
        <!-- /.row -->
  
    
  

<div style=" height: auto;">
  <div align="center" style="height: auto; width: 100px;">

 <table style="">
 <tr> 
 <td style="width: 100px;"> 
  <form action="" method="post" >
  <div style=" margin-top: 30px; " class="container " >
    <input style="text-align: center;width: 100%;padding: 50px; border: solid 1.5px; border-radius: 20px;" type="text" placeholder="What's in your mind" name="question" required>
    <input  type="submit" name="post" value="post" style="width:100px; float: right; margin-top: 20px;" class="btn btn-info">
  </div>
  </form>
  
  <hr>  
  <section style=" margin-top:20px; ">
    <?php 
      include "connection.php";
      $qry="select * from ask ORDER BY date DESC ";
      $res=$conn->query($qry);
      while($row=$res->fetch_assoc())
      {
       $id=$row['id'];
       $question=$row['question'];
       $date=$row['date'];
        $mid=$row['mid'];
        $name=$row['name'];
       ?>

  <div class="media" style="border: outset 1px; padding: 30px;border-radius: 50px 20px;"  >
   

    

    <div class="media-left" >
      <img src="images/guest1.png" class="media-object" style="width:45px">
    </div>

    <div class="media-body">
      <h4 class="media-heading"><?php echo $name; ?> <small><i>Posted on <?php echo $date; ?></i></small></h4>
      <h2 style="font-weight: 900;" class="text-success"><?php echo $question ?></h2>
      
      



      <form method="post">
      <input style="text-align: center;width: 100%; margin-top: 10px;border-radius: 10px;" type="text" placeholder="Write a comment" name="comm" required>
      <input style="text-align: center;width: 100%; margin-top: 20px;" type="hidden" value="<?php echo $id ?>" placeholder="Write a comment" name="qid" required>
      
      <input type="submit" name="comment" value="comment" style="width:100px; float: right;" class="btn btn-primary">
      <input type="" name="like" value="like" style="width:100px; float: right;" class="btn btn-primary">
      </form>



      
      <!-- Nested media object -->
      <div class="media">
        <?php 
          include "connection.php";
          $qry1="select * from comment where qid= '".$id."'";
      
          $result=$conn->query($qry1);
          while($row=$result->fetch_assoc())
          {
           $id=$row['id'];
           $comment=$row['comment'];
           $date=$row['date'];
            $qid=$row['qid'];
            $name=$row['name'];

            
            


               ?>
         <div style="margin-top: 20px;">       
        <div class="media-left">
          <img src="images/guest.png" class="media-object" style="width:45px">
        </div>
        <div class="media-body">
          <h4 class="media-heading" ><?php echo $name; ?><small><i> Posted on <?php echo $date; ?></i></small></h4>
          <h1 style="font-weight: 900"><?php echo $comment; ?></h1>
        
        <form method="post" >
          <input style="text-align: center;width: 100%; margin-top:10px ; border-radius: 10px;" type="text" placeholder="Write a reply" name="postreply" required>
          <input style="text-align: center;width: 100%; margin-top: 20px;" type="hidden" value="<?php echo $id ?>" placeholder="Write a reply" name="cid" required>
          <div >
          <input type="submit" name="reply" value="reply" style="width:100px; float: right;" class="btn btn-primary">
          <input type="submit" name="like" value="like" style="width:100px; float: right;" class="btn btn-primary">
          </div>
        </form>
      


          <!-- Nested media object -->
          <div class="media">
            <?php 
          include "connection.php";
          $qry2="select * from replylist where cid= '".$id."' ";
      
          $result2=$conn->query($qry2);
          while($row=$result2->fetch_assoc())
          {
           $id=$row['id'];
           $reply=$row['reply'];
           $date=$row['date'];
            $cid=$row['cid'];
            $name=$row['name'];

            
            


               ?>

            <div class="media-left">
              <img src="images/guest2.png" class="media-object" style="width:45px">
            </div>
            <div class="media-body">
              <h4 class="media-heading"><?php echo $name;?><small><i>Posted on <?php echo $date;?></i></small></h4>
              <h1 style="font-weight: 700"><?php echo $reply;?></h1>
            </div>
            <?php
          }
          ?>
          </div>  
          
        </div>
      </div>
        
        <!-- Nested media object -->
        
          
          
        <?php
      }
      ?>
        
      </div>
    </div>
    
    <!-- Nested media object -->  

    <div class="media">
      
      <div class="media-body">
       <hr width="5" size="500"   >
      </div>
      
    </div>
    </div>

    <?php
  }
  ?>

  
  </section>
</td>
</tr>
</table>
</div>
</div>
</div>
</section>





<!-- header section -->

        <!-- Blog Post Row -->
        
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/top.js"></script> 
<script src="js/modernizr.min.js"></script>
<script src="js/index.js"></script>
<script src='js/aos.js'></script>
<script src="js/aos2.js"></script>
<!-- /js files -->
</body>
</html> 
<?php 

 include "footer.php";
?>
