function leesBoeken(){
    $.ajax({    
      type: "GET",
      url: "boeken_uitlees.php",             
      dataType: "JSON",                  
      success: function(data){                     
          //$("#table-container").html(data);   
         console.log(data); 
         for (let i=0; i<=data.length; i++) 
         { 
             
             table.innerHTML += " Author: " + data[i].author + "<br/>" + " ID: " + data[i].id + "</br> ISBN: " + data[i].isbn + "</br>" + " Title: " + data[i].title + "</br> </br> <hr>";
     
         }

      }
  });
}

