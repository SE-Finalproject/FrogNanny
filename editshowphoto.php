<?php
    require("Model.php");

    $id = (int)$_REQUEST['id'];
    $results = getFrogPhotoInfoID($id);
    $rs = mysqli_fetch_array($results);

?>
<html>
    <style>
        a {
            text-decoration: none;
            color: black;
        }
    </style>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>修改</title>
    </head>
    <body>
        <h1>edit Photo[<?php echo $id; ?>]: #<?php echo $rs['species'];?></h1>
        <form method="post" action="Control.php?act=modifyPhoto">
            <input type="hidden" name='id' value="<?php echo $id;?>">
                <!--Photo species: <input name="species" type="text" id="species" value="<?php echo $rs['species'];?>" /> <br/>-->

                gpsX: <input name="gpsX" type="text" id="info" value="<?php echo $rs['gpsX'];?>" /> <br/>

                gpsY: <input name="gpsY" type="text" id="place" value="<?php echo $rs['gpsY'];?>" /> <br/><br/>

            <input type="submit" name="Submit" value="送出" />
            <button><a href="Template2.0/gallery.html">返回</a></button>
        </form>
    </body>
</html>