$(document).ready(function() {
    $("#btnRefresh").click(function() {
        $.ajax({
            type: "POST",
            url: "/logic/retrieveusers.php",
            data: "",
            dataType: 'json',
            success: function(data){
                var html, comment;
                for(var i = 0; i < data.length; i++) {
                    comment = data[i];
                    html += '<p>' + comment.firstname
                }
            }
        })
    });
});