<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css2.0/showphoto.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
</head>

<?php
    require("Model.php");

    $dirname="img/upload";
    $pictype = array("jpg", "png", "jpeg", "gif", "JPG");
    $files = array();
    if($handle = opendir($dirname)) {
        while(false !== ($file = readdir($handle))) {
            for($i = 0; $i < sizeof($pictype); $i++) {
                if(strstr($file, ".".$pictype[$i])) {
                    $files[] = $file;

                }
            }
        }
        for($i = 0; $i < sizeof($files); $i++) {
            $results = getFrogPhotoInfoID($i+1);
            if ($rs = mysqli_fetch_array($results)) {
                $j = $i + 1;
                $size = sizeof($files);
                echo "<div><div class='numbertext'> $j / $size</div>
                    <img src='../$dirname/$files[$i]' style='width:75%' alt='
                    author : ".$rs['author'].",
                    ".$rs['species'].",
                    ".$rs['findTime'].",
                    ".$rs['date']."'>
                    <td>".$rs['species']."</td>
                    <button class='btn warning'><a href='../editshowphoto.php?id=",$rs['id'],"' class='link'>修改</a></button></div>";

            }
            
        }
        closedir($handle);
    }
?>