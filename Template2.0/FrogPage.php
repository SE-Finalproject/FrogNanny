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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
                $(".confirm_btn").click(function (){  //綁定class confirm_btn讓其點擊時可以執行function
                    console.log($(this).attr("data-id"));  
                    if(confirm("確定要刪除齁")) {
                        var formData = new FormData();
                        formData.append("act", "delet");
                        formData.append("id", $(this).attr("data-id"));
                        $.ajax({
                            url: '../Control.php',
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function ( data ) {
                                console.log("刪除成功");
                                location.reload(); //重新載入
                            }
                        });
                    }
                });
        });
    </script>
</head>
<body>

<div class="container-fluid" align="center" >
    <div class="row" >
        <div class="col-12 text-center">
           <button type="button" onclick="location.href='FrogUpload.php'">新增</button>
        </div>
       
        <table align = "center" class="tbspan table-dark table-hover"  border="1">

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
                    "</td><td>", 
                    "<input type='button' data-id='",$rs['id'],"' class='btn btn-primary confirm_btn' value='刪除'>",
                    "　",
                    "<a href='../editFrog.php?id=",$rs['id']," 'class='btn btn-primary'>修改</a>",
                    "</td></tr>";
               
                }
            ?>
        </table>
    </div>
</div>
   
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

