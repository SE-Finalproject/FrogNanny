<?php
    session_start();
    require("dbconnect.php");
    require_once('./Model.php');
    $action =$_REQUEST['act'];
    // 這是新版XD
    switch ($action) {
        //新增
        case 'showpics':
            echo json_encode(showpics(), JSON_UNESCAPED_UNICODE);
        break;

        case 'insert':
            $family=$_REQUEST['family'];
            $genus=$_REQUEST['genus'];
            $species=$_REQUEST['species'];
            $info=$_REQUEST['info'];
            $place=$_REQUEST['place'];
            insertFrog($family, $genus, $species, $info, $place);
            // header('Location:Template2.0/FrogPage.php');
        break;
        
        case 'update' :
            $id = (int) $_REQUEST['id'];
            $species=$_REQUEST['species'];
            $info=$_REQUEST['info'];
            $place=$_REQUEST['place'];
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
            if ($id > 0) {
                deletFrog($id);
            }
            header('Location:Template2.0/FrogPage.php');
        break;
    }
    
?>
