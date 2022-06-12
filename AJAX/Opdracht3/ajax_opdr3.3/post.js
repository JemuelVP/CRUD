$("#knop").click(function(){
   
    let tit = $('#titelVeld').val();
    let sch = $('#schrijverVeld').val();
    let isbn = $('#isbnVeld').val();
    
    if (tit == "")
    {
        $("#resultaat").html("Vul een titel in!");
    }
    else if (sch == "")
    {
        $("#resultaat").html("Vul een schrijver in!");
    }

    else if (isbn == "")
    {
        $("#resultaat").html("Vul een ISBN nummer in!");
    }

    else
    {
        $.ajax({
            type:   "POST",
            url:    "post.php",
            data:   {"titel": tit,
                     "schrijver": sch, 
                     "isbn": isbn
                    },
            success: function (tekst) {
                $("#resultaat").html(tekst);
            },
            error: function (request, error) {
                console.log ("FOUT:" + error);
            }
        });
    }

    return false;
});


