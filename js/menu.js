$(document).ready(function () {

    $.ajax({
        url: './servidor/bringSellers.php',
        type: 'GET',
        success: function(response){

            
            let issue= JSON.parse(response);
            
            
            let template='';
            issue.forEach(element => {
               
                template += `
                <img src="data:image/jpg;base64,${element.imagenvendedor}" height="333px" width="500px">
                <h3>Activo ahora</h3>
                <h2>${element.nombrevendedor}</h2>
                <p>${element.descripcionvendedor}</p>
                <a href="./servidor/pedido.php?idseller=${element.idvendedor}">Hacer Pedido</a> 
                `
            });
            $('#VActivo').html(template);
        }
    });

    
    
});



                