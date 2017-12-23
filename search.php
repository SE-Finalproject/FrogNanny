<?php
    require("../dbconnect.php");
    global $conn;
    // $term = strip_tags(substr(,0, 100));
    $term = mysql_escape_string($_POST['search_term']);
    $sql = $sql="SELECT * FROM `frogRecord` WHERE info LIKE '%$term%'"; 
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
?>