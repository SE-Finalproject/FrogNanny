// Create a lightbox
$(function() {
    showpics();
    showPhoto();
});

//讀取照片
function showpics() {
    $.ajax({
        type:"POST",
        url: "../Control.php",
        data: { act:"showpics" },
        success: function(data) {
            var result = JSON.parse(data);
            console.log(result);
            for (var i = 0; i < result.length; i++) {
                var image = "<div><div class='numbertext'></div><img src='../img/upload/"+result[i].path+"' style='width:100%' alt='作者:"+result[i].author+" 科:"+result[i].family+" 種:"+result[i].species+"'><button class='btn warning'><a href='../editshowphoto.php?id="+result[i].id+"' class='link'>修改</a></button></div>";
                // console.log(image);
                $(".gallery").append(image);
            }
            // $(".gallery").html(data);
        },
        error: function(jqXHR) {
            alert("發生錯誤: " + jqXHR.status);
        }
    });
}
//show self photo
function showPhoto(){
    // Create
    var show_self_photo = $("<div class='show_self_photo'></div>");
    var img = $("<img>");
    var caption = $("<p class='caption'></p>");

    // Add image and caption to show_self_photo
    show_self_photo
        .append(img)
        .append(caption);
    // 
    $('body').append(show_self_photo);

    //didn't useQQ // $('.gallery img').click(function(e) {
    $('.gallery').on("click", "img", function(e) {
        e.preventDefault();

        // Get image link and description
        var src = $(this).attr("src");
        var cap = $(this).attr("alt").split(",");

        // change line
        let str = '';
        for(let value of cap) {
            str += `<span>${value}</span><br/>`;
        }
        // 
        img.attr('src', src);
        caption.html(str);

        // Show 
        show_self_photo.fadeIn('fast');

        show_self_photo.click(function() {
            show_self_photo.fadeOut('fast');
        });
    });
}