let res = document.getElementById("dier1");
    $.ajax({
        type:    "GET",
        url:     "https://segaar.sd-lab.nl/dierentuinAPI/",
        dataType: "JSON",
        success: function (array) {
            /* TEST: */ console.log(array);
            res.innerHtml = "landen:<br/>";
            for (let i=0; i<=array.length; i++) 
            {
                
                dier1.innerHTML += " Naam: " + array[i].naam + "<br/>" + " Soort: " + array[i].soort + "</br> Hoknummer: " + array[i].hokNummer + "</br>" + " Verzorger: " + array[i].verzorger + "</br> </br> <hr>";
        
            }
        },
        error: function (request, error) {
            console.log ("FOUT:" + error);
        }
    });
