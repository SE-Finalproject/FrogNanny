<?php
    session_start();
    require("dbconnect.php");
    require_once('./Model.php');
    $action = $_REQUEST['act'];
    // 這是新版XD
    switch ($action) {
        //新增
        case 'showpics':
            echo json_encode(showpics(), JSON_UNESCAPED_UNICODE);
        break;

        case 'insert':
        $result = array();
            // print_r($_REQUEST);
            $family = $_REQUEST['family'];
            $genus = $_REQUEST['genus'];
            $species = $_REQUEST['species'];
            $info = $_REQUEST['info'];
            $place = $_REQUEST['place'];
            // echo "string";
            $result["status"] = insertFrog($family, $genus, $species, $info, $place);
            if ($result["status"] == 1) {
                $result["msg"] = "新增成功";
            } else {
                $result["msg"] = "新增失敗";

            }
            echo json_encode($result, JSON_UNESCAPED_UNICODE);
            // header('Location:Template2.0/FrogPage.php');
        break;
        
        case 'update' :
            $id  =  (int) $_REQUEST['id'];
            $species = $_REQUEST['species'];
            $info = $_REQUEST['info'];
            $place = $_REQUEST['place'];
            updateFrog($id, $species, $info, $place);
            header('Location:Template2.0/FrogPage.php');
        break;

        case 'modifyPhoto' :
            $id = (int)$_REQUEST['id'];
            $gpsX = $_REQUEST['gpsX'];
            $gpsY = $_REQUEST['gpsY'];
            modifyFrogPhotoInfo($id, $gpsX, $gpsY);
            header('Location:Template2.0/gallery.html');
        break;

        case 'delet' :
            $id = (int)$_REQUEST['id'];
            console.log($id);
            if ($id > 0) {
                deletFrog($id);
            }
            //header('Location:Template2.0/FrogPage.php');
        break;
    }
    
?>
