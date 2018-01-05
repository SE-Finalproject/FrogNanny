<?php
    session_start();
    require("../Model.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Frog Nanny's Web</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../javascript2.0/RowSpan.js"></script>
</head>
<body>

<div class="container-fluid" align="center" >
    <div class="row" >
        <div class="col-12 text-center">
           <button type="button" onclick="location.href='FrogUpload.php'">新增</button>
        </div>
       
        <table align = "center" class="list table-dark table-hover"  border="1">

            <tr>
                <td>科</td>
                <td>屬</td>
                <td>種</td>
                <td>資訊</td>
                <td>棲息地</td>
            </tr>
            <?php
                $results = getFrogList();
                while ($rs = mysqli_fetch_array($results)) {
                    echo "<tr><td>", $rs['family'], "<br/>",
                    "</td><td>", $rs['genus'],
                    "</td><td>", $rs['species'],
                    "</td><td>", $rs['info'],
                    "</td><td>", $rs['place'],
                    "</td></tr>";
                }
            ?>

        </table>

    </div>
</div>


  </div>
</div>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        </script>
    </body>
</html>

