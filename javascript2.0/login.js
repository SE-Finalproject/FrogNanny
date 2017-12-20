
var login_div = document.getElementById('login_div');
var showLoginDiv = function () {
    document.getElementById('login_div').style.display='block';
}

var closeLoginDiv = function () {
    document.getElementById('login_div').style.display='none';
}
// When the user clicks anywhere outside of the login_div, close it
window.onclick = function(event) {
    if (event.target == login_div) {
        login_div.style.display = "none";
    }
}
