<?php
    $dirname="img/upload";
    $pictype = array("jpg", "png", "jpeg", "gif");
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
            $j = $i + 1;
            $size = sizeof($files);
            echo "<div><div class='numbertext'> $j / $size</div><img src='../$dirname/$files[$i]' style='width:100%' alt='wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww'></div>";
        }
        closedir($handle);
    }
?>