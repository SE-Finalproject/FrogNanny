<?php
    require("dbconnect.php");

    // show frog list
    function getFrogList() {
        global $conn;
        $sql = "SELECT frogrecord.* FROM frogrecord";
        return mysqli_query($conn, $sql);
    }

    // show frog photo information
    function getFrogPhotoInfo() {
        global $conn;
        $sql = "SELECT photoupload.* FROM photoupload";
        return mysqli_query($conn, $sql);
    }
    
    function getFrogPhotoInfoID($id) {
        global $conn;
        $sql = "SELECT photoupload.* FROM photoupload where id = '$id'";
        return mysqli_query($conn, $sql);
    }

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

    function modifyFrogPhotoInfo($id, $gpsX, $gpsY) {
        global $conn;
        $gpsX = mysqli_real_escape_string($conn, $gpsX);
        $gpsY = mysqli_real_escape_string($conn, $gpsY);
        $id = (int)$id;

        if ($id) { //if species is not empty
            $sql = "UPDATE photoupload set gpsX ='$gpsX', gpsY = '$gpsY' WHERE id = $id;";
        mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
        }
    }

    function deletFrog($id){
        global $conn;
        
        //對$id 做基本檢誤
        $id = (int) $id;
        //產生SQL
        $sql = "delete from frogrecord where id=$id;";
        return mysqli_query($conn, $sql); //執行SQL
    }

    //gallery show pic
    function showpics() {
        global $conn;
        
        $sql = "SELECT photoupload.* FROM photoupload";
        $result = mysqli_query($conn, $sql);
        $data = array();
        $array = array();
        while($rs = mysqli_fetch_assoc($result)) {
            $data["id"] = $rs["id"];
            $data["author"] = $rs["author"];
            $data["path"] = $rs["path"];
            $data["family"] = $rs["family"];
            $data["genus"] = $rs["genus"];
            $data["species"] = $rs["species"];
            array_push($array, $data);
        }
        return $array;
        // $dirname="img/upload";
        // $pictype = array("jpg", "png", "jpeg", "gif");
        // $files = array();
        // if($handle = opendir($dirname)) {
        //     while(false !== ($file = readdir($handle))) {
        //         for($i = 0; $i < sizeof($pictype); $i++) {
        //             if(strstr($file, ".".$pictype[$i])) {
        //                 $files[] = $file;
        //             }
        //         }
        //     }
        //     return $files;
        //     closedir($handle);
        // }

    }

?>
