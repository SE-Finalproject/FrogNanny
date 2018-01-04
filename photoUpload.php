<?php
    //隱藏錯誤訊息
    // error_reporting(0);
    require("dbconnect.php");
    global $conn;
    
    # 取得上傳檔案數量
    $fileCount = count($_FILES['image_uploads']['name']);

    for ($i = 0; $i < $fileCount; $i++) {
        # 檢查檔案是否上傳成功
        if ($_FILES['image_uploads']['error'][$i] === UPLOAD_ERR_OK){
            // echo '檔案名稱: ' . $_FILES['image_uploads']['name'][$i] . '<br/>';
            // echo '檔案類型: ' . $_FILES['image_uploads']['type'][$i] . '<br/>';
            // echo '檔案大小: ' . ($_FILES['image_uploads']['size'][$i] / 1024) . ' KB<br/>';
            // echo '暫存名稱: ' . $_FILES['image_uploads']['tmp_name'][$i] . '<br/>';
            # 檢查檔案是否已經存在
            if (file_exists('img/upload/' . $_FILES['image_uploads']['name'][$i])){
                echo '檔案已存在。<br/>';
            } else {
                //sql~~~~ 
                // $author=$_REQUEST['author'];
                $path=$_FILES['image_uploads']['name'][$i];
                // $family=$_REQUEST['family'];
                // $genus=$_REQUEST['genus'];
                // $species=$_REQUEST['species'];
                $author = mysqli_real_escape_string($conn, $_REQUEST['author']);
                $family = mysqli_real_escape_string($conn, $_REQUEST['family']);
                $genus = mysqli_real_escape_string($conn, $_REQUEST['genus']);
                $species = mysqli_real_escape_string($conn, $_REQUEST['species']);
                $findTime = mysqli_real_escape_string($conn, $_REQUEST['findTime']);
                //sql~~~~
                $file = $_FILES['image_uploads']['tmp_name'][$i];
                $dest = 'img/upload/' . $_FILES['image_uploads']['name'][$i];

                $sql = "INSERT INTO photoUpload(author, path, family, genus, species, findTime) VALUES ('$author', '$path', '$family', '$genus', '$species', '$findTime')";
                # 將檔案移至指定位置
                
                move_uploaded_file($file, $dest);
                mysqli_query($conn, $sql);
                // header('Location:FrogHome.php');
                echo "<script>history.go(-2);</script>";
            }
        } else {
            echo '錯誤代碼：' . $_FILES['image_uploads']['error'] . '<br/>';
        }
    }
?>