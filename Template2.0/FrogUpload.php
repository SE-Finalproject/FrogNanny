<?php
    //隱藏錯誤訊息
    error_reporting(0);
    session_start();
    require("../dbconnect.php");
    //檢查是否有登入(cookie存在uID)， 沒有登入就到loginForm.php
    // if (!isset($_SESSION['uID']) or $_SESSION['uID'] <= 0) {
    //     header("Location: loginForm.php");
    //     exit(0);
    // }
?>
<html>
<head>
    <!-- <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=big5"> -->
    <meta charset="utf-8">
    <script type="text/javascript" src="../javascript2.0/FrogUpload.js"></script>
    <link rel="stylesheet" type="text/css" href="../css2.0/FrogUpload.css">

</head>

<body  onload = "load();">

    <div class="FormHeader">
        <h2 align = center>生態資料庫</h2>
        <div class="back"><a href="FrogHome.html" >返回</a></div>
    </div>
    
    <div class="FormContain">
        <div class="viewFrom">
            <h2 align = center>青蛙建檔</h2>
            <form name = "theForm" method="post" action="../Control.php">
                <table align = center border="1">
                    <tr>
                        <td class="inputTitle">科</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="family" id="family" class="tableSel" onChange="onChangeFamily();"></select>
                        </td>
                    </tr>
                    <tr>
                        <td class="inputTitle">屬</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="genus" id="genus" class="tableSel" onChange="onChangeGenus();"></select>
                        </td>
                    </tr>
                    <tr>
                        <td class="inputTitle">種</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="species" id="species" class="tableSel"></select>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td class="inputTitle">簡介</td>
                    </tr>

                    <tr>
                        <td><textarea rows="4" cols="34" name="info" class="tabText"></textarea> <!-- <input type="area" name="info" > --></td>
                            
                    </tr>
                    <tr>
                        <td class="inputTitle">棲地</td>
                    </tr>
                    <tr>
                        <td><textarea rows="4" cols="34" name="place" class="tabText"></textarea> <!-- <input type="area" name="place"> --></td>
                    </tr>
                </table>
                    <input name="act" type="hidden" value="insert">
                    <input type="submit" name="submit" value="submit">
            </form>
        </div>
        
    </div>
    <hr>
    </body>
</html>
