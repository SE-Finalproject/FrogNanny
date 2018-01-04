<?php
    session_start();
    require("dbconnect.php");
    require_once('./Model.php');
    $action =$_REQUEST['act'];
    // 這是新版XD
    switch ($action) {
        //新增
        case 'insert':
            $family=$_REQUEST['family'];
            $genus=$_REQUEST['genus'];
            $species=$_REQUEST['species'];
            $info=$_REQUEST['info'];
            $place=$_REQUEST['place'];
            insertFrog($family, $genus, $species, $info, $place);
            header('Location:Template2.0/FrogPage.php');
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
<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>(嘿嘿其實我不會出現)</title>
    </head>
    <body>
        <?php
            echo "via";
        ?>
        <!-- <a href='view.php'>執行完成，回留言板</a> -->
    </body>
</html>