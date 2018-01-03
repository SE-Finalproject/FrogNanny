<?php
    session_start();
    require("../Model.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Frog Nanny's Web</title>
    <!-- <script type="text/javascript" src="../javascript2.0/login.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="../css2.0/login.css">
    <link rel="stylesheet" type="text/css" href="../css2.0/Home_new.css"> -->
    <style>
        /* header背景圖片 */
        .header {
            background-image: url("../img/i3.jpg");
            text-align: center;
            background-size: cover;
        }
    </style>
</head>
<body>


<div class="header py-5">
    <h1 class="py-5">Frog</h1>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
<div class="container">
  <a class="navbar-brand" href="FrogHome.html">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          物種
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="FrogPage.php">青蛙</a>
          <a class="dropdown-item" href="butterfly.html">蝴蝶</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Photo</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-lg-9 mb-sm-3">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            
           <button type="button" onclick="location.href='FrogUpload.php'">新增</button>
           &nbsp
              
              
                
        </div>
       
        <table class="tbspan table-dark table-hover" width="600" border="1">

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

<div class="footer">
  <h2>Footer</h2>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script>
        ////合併上下欄位(colIdx)
        jQuery.fn.rowspan = function(colIdx) {
            return this.each(function() {
                var that;
                $('tr', this).each(function(row) {
                    var thisRow = $('td:eq(' + colIdx + '),th:eq(' + colIdx + ')', this);
                    if ((that != null) && ($(thisRow).html() == $(that).html())) {
                        rowspan = $(that).attr("rowSpan");
                        if (rowspan == undefined) {
                            $(that).attr("rowSpan", 1);
                            rowspan = $(that).attr("rowSpan");
                        }
                        rowspan = Number(rowspan) + 1;
                        $(that).attr("rowSpan", rowspan);             
                        $(thisRow).remove(); ////$(thisRow).hide();
                    } else {
                        that = thisRow;
                    }
                    that = (that == null) ? thisRow : that; 
                });
                alert('1');
            });
        }

        ////當指定欄位(colDepend)值相同時，才合併欄位(colIdx)
        jQuery.fn.rowspan = function(colIdx, colDepend) {
            return this.each(function() {
                var that;
                var depend;
                $('tr', this).each(function(row) {
                    var thisRow = $('td:eq(' + colIdx + '),th:eq(' + colIdx + ')', this);
                    var dependCol = $('td:eq(' + colDepend + '),th:eq(' + colDepend + ')', this);
                    if ((that != null) && (depend != null) && ($(thisRow).html() == $(that).html()) && ($(depend).html() == $(dependCol).html())) {
                        rowspan = $(that).attr("rowSpan");
                        if (rowspan == undefined) {
                            $(that).attr("rowSpan", 1);
                            rowspan = $(that).attr("rowSpan");
                        }
                        rowspan = Number(rowspan) + 1;
                        $(that).attr("rowSpan", rowspan);
                        $(thisRow).remove(); ////$(thisRow).hide();
                        
                    } else {
                        that = thisRow;
                        depend = dependCol;
                    }
                    that = (that == null) ? thisRow : that;
                    depend = (depend == null) ? dependCol : depend;
                });
            });
        }

        ////合併左右欄位
        jQuery.fn.colspan = function(rowIdx) {
            return this.each(function() {
                var that;
                $('tr', this).filter(":eq(" + rowIdx + ")").each(function(row) {
                    $(this).find('th,td').each(function(col) {
                        if ((that != null) && ($(this).html() == $(that).html())) {
                            colspan = $(that).attr("colSpan");
                            if (colspan == undefined) {
                                $(that).attr("colSpan", 1);
                                colspan = $(that).attr("colSpan");
                            }
                            colspan = Number(colspan) + 1;
                            $(that).attr("colSpan", colspan);
                            $(this).remove(); 
                        } else {
                            that = this;
                        }
                        that = (that == null) ? this : that; 
                    });
                });
            });
        }
        
        $(function() {
            $('.tbspan').rowspan(1, 0);
            $('.tbspan').rowspan(0);
        });
        </script>
    </body>
</html>

