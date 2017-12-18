<?php
    //啟用session 變數功能
    session_start(); 

    //引入檔案
    require_once('loginModel.php');
    $action =$_REQUEST['act'];

    switch ($action) {
        case 'login':

            //取得從loginForm.php表單傳來之POST參數
            $userAccount = $_POST['userID']; echo "iiii";
            $passWord = $_POST['password'];
            //比對密碼
            if ($userID = checkUP($userAccount, $passWord)) { 
                //若正確，將userID存在session變數中，作為登入成功之記號
                $_SESSION['uID'] = $userID; 
                header('Location: template/view.html');
            } else {
                //print error message
                echo "Invalid Username or Password - Try again <br />";
                echo '<a href="template/index.php">[重新登錄]</a> ';
            }
        break;
}
?>