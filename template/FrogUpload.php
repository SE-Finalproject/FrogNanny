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
    <script type="text/javascript" src="../javascript/FrogUpload.js"></script>
</head>

<body  onload = "load();">
    <h2 align = center>生態資料庫</h2>
    <hr>
    <form name = "theForm" method="post" action="../Control.php">
        <table align = center border="1">
            <tr>
                <th colspan="2">建檔</th>
            </tr>
            <tr>
                <td>科</td>
                <td align = center>
                    <select name="family" id="family" onChange="onChangeFamily();">
                        <!-- <script>
                            // console.log(dataTree[0].name);
                            for (i = 0; i < dataTree.length; i++)
                                document.writeln("<option value=\""+dataTree[i].name+"\">"+dataTree[i].name);
                        </script>
     -->                </select>
                </td>
            </tr>
            <tr>
                <td>屬</td>
                <td align = center>
                    <select name="genus" id="genus" onChange="onChangeGenus();"></select>
                </td>
            </tr>
            <tr>
                <td>種</td>
                <td align = center>
                    <select name="species" id="species"></select>
                </td>
            </tr>
            <tr>
                <td>簡介</td>
                <td><input type="text" name="info"></td>
            </tr>
            <tr>
                <td>棲地</td>
                <td><input type="text" name="place"></td>
            </tr>
        </table>
            <label>
                <input name="act" type="hidden" value="insert">
                <input type="submit" name="submit" value="submit">
            </label>
        </form>
        
        
    <hr>
    </body>
</html>
