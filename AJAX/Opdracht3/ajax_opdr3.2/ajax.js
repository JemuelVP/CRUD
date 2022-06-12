$(document).ready(function () {
    $("#zoeken").keyup(function () {
        let query = $(this).val();
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
});