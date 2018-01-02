// Create a lightbox
$(function() {
    //讀取照片
    $.ajax({
        type:"POST",
        url: "../showphoto.php",
        success: function(data) {
            $(".gallery").html(data);
        },
        error: function(jqXHR) {
            alert("發生錯誤: " + jqXHR.status);
        }
    });

    // Create
    var $show_self_photo = $("<div class='show_self_photo'></div>");
    var $img = $("<img>");
    var $caption = $("<p class='caption'></p>");

    // Add image and caption to show_self_photo
    $show_self_photo
        .append($img)
        .append($caption);
    // 
    $('body').append($show_self_photo);

    //didn't useQQ // $('.gallery img').click(function(e) {
    $('.gallery').on("click", "img", function(e) {
        e.preventDefault();

        // Get image link and description
        var src = $(this).attr("src");
        var cap = $(this).attr("alt");

        // 
        $img.attr('src', src);
        $caption.text(cap);

        // Show 
        $show_self_photo.fadeIn('fast');

        $show_self_photo.click(function() {
            $show_self_photo.fadeOut('fast');
        });
    });
});