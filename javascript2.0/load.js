function loadURL(URL, div) {
    //use jQuery ajax to load web content
    $.ajax({
        url: URL,
        dataType: 'html',
        type: 'POST',
        // data: { field1: 10, field2: 'abc'}, //optional, you can send field1=10, field2='abc' to URL by this
        error: function(response) { //the call back function when ajax call fails
            alert('Ajax request failed!');
        },
        success: function(response) { //the call back function when ajax call succeed
            $(div).html(response); //set the html content of the object msg
        }
    });
}