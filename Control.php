<?php
    session_start();
    require("dbconnect.php");
    require_once('Model.php');
    $action =$_REQUEST['act'];

    switch ($action) {
        //新增
        case 'insert':
            $family=$_REQUEST['family'];
            $genus=$_REQUEST['genus'];
            $species=$_REQUEST['species'];
            $info=$_REQUEST['info'];
            $place=$_REQUEST['place'];
            insertFrog($family, $genus, $species, $info, $place);
            echo $species;
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