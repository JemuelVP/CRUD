$("#knop").click(function(){
    //$(this).hide();
    $.ajax({
        type:    "GET",
        url:     "ajax_opdr1.php",
        success: function (tekst) {
            $("#result").html(tekst);
        },
        error: function (request, error) {
            console.log ("FOUT:" + error);
        }
    });
});


