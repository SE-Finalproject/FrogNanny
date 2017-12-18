$(document).ready(function() {
    // $("div").css("border-radius", "20px");
    $('#login_a').click(function() {
        //toogle means that you can turn it on/off
        $('#log').toggleClass('showLog');
    });
});

// $("#login_form").submit(function(e) {
//     e.preventDefault();
//     var loginData = $(this).serializeArray();
//     var formURL = $(this).attr("action");
//     $.ajax({
//         url : formURL,
//         type: "POST",
//         data : postData,
//         success:function(data, textStatus, jqXHR) {
//             var result = $.parseJSON(data);
//             console.log(result.LoginStatus);            

//             if (result.LoginStatus == false) {

//             } else {
//                 document.location.reload();                
//             }
//         },
//         error: function(jqXHR, textStatus, errorThrown) {
//             alert("ajax pust login data error");
//         }
//     });
// });