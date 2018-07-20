<?php 
 include"../connection.php";
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>


<script>
function maincat(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser1.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>



 Main cat :
<select name= "maincat"  onchange="maincat(this.value)">

<?php 
$qry="select * from maincat";
$res=mysql_query($qry);
 while($row=mysql_fetch_array($res))
{
  $id=$row['id'];
 $maincat=$row['maincat'];
?>
<option value="<?php echo $id; ?>"> <?php echo $maincat; ?></option>
<?php
}
?>
</select>
<br>
  Subcat:
  <div id="txtHint">

 </div>
	








</body>
</html>