$(function() {
    $('.list').rowspan(1, 0);
    $('.list').rowspan(0);
    // console.log($('.list'));
});
////當指定欄位(colDepend)值相同時，才合併欄位(colIdx)
jQuery.fn.rowspan = function(colIdx, colDepend) {
    return this.each(function() {
        var that;
        var depend;
        $('tr', this).each(function() {
            var thisRow = $('td:eq(' + colIdx + '),th:eq(' + colIdx + ')', this);
            var dependCol = $('td:eq(' + colDepend + '),th:eq(' + colDepend + ')', this);
            if ((that != null) && (depend != null) && ($(thisRow).html() == $(that).html()) && ($(depend).html() == $(dependCol).html())) {
                rowspan = $(that).attr("rowspan");
                if (rowspan == undefined) {
                    $(that).attr("rowspan", 1);
                    rowspan = $(that).attr("rowspan");
                }
                rowspan = Number(rowspan) + 1;
                $(that).attr("rowspan", rowspan);
                $(thisRow).remove();
            } else {
                that = thisRow;
                depend = dependCol;
            }
            that = (that == null) ? thisRow : that;
            depend = (depend == null) ? dependCol : depend;
        });
        alert('2');
    });
}
////合併上下欄位(colIdx)
jQuery.fn.rowspan = function(colIdx) {
    return this.each(function() {
        var that;
        $('tr', this).each(function() {
            var thisRow = $('td:eq(' + colIdx + '),th:eq(' + colIdx + ')', this);
            if ((that != null) && ($(thisRow).html() == $(that).html())) {
                rowspan = $(that).attr("rowspan");
                if (rowspan == undefined) {
                    $(that).attr("rowspan", 1);
                    rowspan = $(that).attr("rowspan");
                }

                rowspan = Number(rowspan) + 1;
                $(that).attr("rowspan", rowspan);
                $(thisRow).remove(); 
            } else {
                that = thisRow;
            }
            that = (that == null) ? thisRow : that; 
        });
        alert('1');
    });
}

