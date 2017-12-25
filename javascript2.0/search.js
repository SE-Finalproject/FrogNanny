$(document).ready(function(){ 
    // $("#search_results").slideUp(); 
    $("#search_button").click(function(e){ 
        e.preventDefault(); 
        search(); 
    }); 
    // $("#search_term").keyup(function(e){ 
    //     e.preventDefault(); 
    //     search(); 
    // }); 
});
function search() {
    // $("#search_results").show(); 
    // var search_val = $("#search_term").val(); 
    $.ajax({
        type:"POST",
        url: "../search.php",
        data: {search_val : $("#search_term").val()},
        success: function(data) {
            if (data.length > 0) {
                $("#search_results_table").show();
                $("#search_results").html(data);
            }
            // else {
            //     $("#searchResult").html(data.msg);
            // }
        },
        error: function(jqXHR) {
            alert("發生錯誤: " + jqXHR.status);
        }
    })
    // $.post("../search.php", {search_term : search_val}, function(data){
    //     console.log(search_val);
    //     if (data.length > 0) { 
    //         $("#search_results").html(data); 
    //     }
    // });
} 