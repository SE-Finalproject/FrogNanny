<?php
    require("dbconnect.php");
    global $conn;
    // $text = strip_tags(substr(,0, 100));
    $text = mysqli_real_escape_string($conn, $_REQUEST['search_term']);
    if(empty($text)) {  //如果為空
        echo "<script type='text/javascript'>alert('不可為空喔! 請輸入內容^_^');</script>";
    } else {
        $sql = $sql="SELECT * FROM `frogRecord` WHERE info LIKE '%$text%'"; 
        $result = mysqli_query($conn, $sql);
        $string = '';
        
        if (mysqli_num_rows($result) == 0){
            $string = "No matches!";
        } else {
            while($row = mysqli_fetch_object($result)) {
                $string .= "<tr><td>".$row->family."</td>";
                $string .= "<td>".$row->genus."</td>";
                $string .= "<td>".$row->species."</td>";
                $string .= "<td>".$row->info."</td>";
                $string .= "<td>".$row->place."</td><tr>";
                // $string .= "<br/>\n";
            } 
        }
        echo $string;
    }
?>