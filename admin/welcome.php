<?php 
session_start();
 
 include "../connection.php";

 if($_SESSION['id']=="")
 {
  echo '<script>
  window.location="index.php";
 </script>';
 }
include "header.php";
 include "menu.php";

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <div style="margin: 150px; height: 200px;">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center"><h1 style="font-size: 60px;">Welcome admin panel </h1></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</div>
</body>
</html>
<?php 

 include"footer.php";
?>