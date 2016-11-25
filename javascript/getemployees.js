$(document).ready(function() {
    $("#btnRefresh").click(function() {
        $.ajax({
            type: "POST",
            url: "/logic/retrieveusers.php",
            data: "",
            dataType: 'json',
            success: function(data){
                $('#results').empty();
                for(var i in data) {
                    var fname = data[i]['firstname'];
                    var lname = data[i]['lastname'];
                    $('#results').append(fname + " " + lname + "<br/>");
                }
            }
        })
    });
});