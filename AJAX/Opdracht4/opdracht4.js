$.ajax({    
    type: "GET",
    url: "uitlees.php",                         
    success: function(data){                       
       console.log(data);  
       
       let boek = JSON.parse(data)
       for (let i=0; i<=boek.length; i++) 
       { 
           
           table.innerHTML += `<table border="1"> 
           <tr>\n 
           <th>ID</th>
           <th>Author</th>
           <th>Title</th>
           <th>Isbn</th>
           <th></th>
           <th></th>
           </tr>
           <tr>
           <td>${boek[i].id}</td>
           <td>${boek[i].author}</td>
           <td>${boek[i].title}</td>
           <td>${boek[i].isbn}</td>
           <td> <button id="aanpassen" data-id="${boek[i].id}">pas aan</button>
           <td> <button id="verwijderen" data-id="${boek[i].id}">verwijder</button>
           </tr>
           </table>`  
       }

    }
});

$(document).on('click', '#verwijderen',function(event){
    event.preventDefault();
    let id = $(this).data('id');
    $.ajax({
        type:   "POST",
        url:    "verwijder.php",
        data: {"id":id},
        dataType: "JSON",
        success: function (test){
            console.log(test);
            window.location.reload();
        }
    })
});

$(document).on('click', '#aanpassen',function(event){
    event.preventDefault();
    let id = $(this).data('id');
    window.location.href = "aanpasform.php?id="+id; 
});
