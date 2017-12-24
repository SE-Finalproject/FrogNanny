<?php
    require("dbconnect.php");

    function insertFrog($family='', $genus='', $species='', $info='', $place='') {
        global $conn;

        if ($family > ' ') {
            //基本安全處理
            $family = mysqli_real_escape_string($conn, $family);
            $genus = mysqli_real_escape_string($conn, $genus);
            $species = mysqli_real_escape_string($conn, $species);
            $info = mysqli_real_escape_string($conn, $info);
            $place = mysqli_real_escape_string($conn, $place);

            $sql = "INSERT INTO frogRecord (family, genus, species, info, place) VALUES ('$family', '$genus', '$species', '$info', '$place')";
            return mysqli_query($conn, $sql);
        } else {
            echo "蝦";
            return false;
        }
    }
    
    function updateFrog($id, $species, $info, $place) {
        global $conn;
        
            $species = mysqli_real_escape_string($conn, $species);
            $info = mysqli_real_escape_string($conn, $info);
            $place = mysqli_real_escape_string($conn, $place);
            $id = (int)$id;
            
        if ($species and $id) { //if species is not empty
            $sql = "update frogrecord set species='$species', info ='$info', place='$place' where id=$id;";
        mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	}
}
?>
<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>(嘿嘿其實我不會出現)</title>
    </head>
    <body>
        <?php
            echo "vvvvvv";
        ?>
        <!-- <a href='view.php'>執行完成，回留言板</a> -->
    </body>
</html>