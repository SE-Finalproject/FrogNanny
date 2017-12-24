<?php
session_start();
require("dbconnect.php");
//$id = (int)$_POST['id'];
//$id = (int)$_GET['id'];
$id = (int)$_REQUEST['id'];
$sql = "select * from frogrecord where id=$id;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve Frog."); //執行SQL查詢
if ($rs=mysqli_fetch_assoc($result)) {
	$genus = $rs ['genus'];
    $family = $rs ['family'];
    $species = $rs['species'];
	$info= $rs['info'];
	$place = $rs['place'];
} else {
	echo "Your id is wrong!!";
	exit(0);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改</title>
</head>
<body>
<h1>edit Frog: #<?php echo $species;?></h1>
<form method="post" action="Control.php?act=update">
<input type="hidden" name='id' value="<?php echo $id;?>">
      Frog species: <input name="species" type="text" id="species" value="<?php echo $species;?>" /> <br>

      Frog info: <input name="info" type="text" id="info" value="<?php echo $info;?>" /> <br>

      Frog place: <input name="place" type="text" id="place" value="<?php echo $place;?>" /> <br>
	  
      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
</body>
</html>
