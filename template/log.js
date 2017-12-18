var showLoginDiv = function () {
    document.getElementById('log').style.display='block';
}

var closeLoginDiv = function () {
    document.getElementById('log').style.display='none';
}

window.onclick = function(event) {
    if (event.target == log) {
        loginDiv.style.display = "none";
    }
}
