<?php
//隱藏錯誤訊息
    error_reporting(0);
    
    # 取得上傳檔案數量
    $fileCount = count($_FILES['image_uploads']['name']);

    for ($i = 0; $i < $fileCount; $i++) {
        # 檢查檔案是否上傳成功
        if ($_FILES['image_uploads']['error'][$i] === UPLOAD_ERR_OK){
            echo '檔案名稱: ' . $_FILES['image_uploads']['name'][$i] . '<br/>';
            echo '檔案類型: ' . $_FILES['image_uploads']['type'][$i] . '<br/>';
            echo '檔案大小: ' . ($_FILES['image_uploads']['size'][$i] / 1024) . ' KB<br/>';
            echo '暫存名稱: ' . $_FILES['image_uploads']['tmp_name'][$i] . '<br/>';

            # 檢查檔案是否已經存在
            if (file_exists('img/upload/' . $_FILES['image_uploads']['name'][$i])){
                echo '檔案已存在。<br/>';
            } else {
                $file = $_FILES['image_uploads']['tmp_name'][$i];
                $dest = 'img/upload/' . $_FILES['image_uploads']['name'][$i];
                echo "<br>".$dest;
                # 將檔案移至指定位置
                move_uploaded_file($file, $dest);
            }
        } else {
            echo '錯誤代碼：' . $_FILES['image_uploads']['error'] . '<br/>';
        }
    }
?>