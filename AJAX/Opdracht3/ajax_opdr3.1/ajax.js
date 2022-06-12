    $("#test").click(function () {
        console.log("knop geklikt");
        let query = $("#zoeken").val();
        console.log(query);
        if (query != "") {
            $.ajax({
                url: 'boek.php',
                method: 'POST',
                data: {
                    query: query
                },
                success: function (data) {
                    $('#resultaat').html(data);
                }
            });
        } 
    }); 
