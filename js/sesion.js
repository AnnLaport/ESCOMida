$(document).ready(function(){
    $("#formInicio").validetta({
        bubblePosition: "bottom",
        bubbleGapTop: 10,
        bubbleGapLeft: -5,
        onValid:function(e){
            e.preventDefault();
            $.ajax({
                url:"./sesion.php",
                method:"POST",
                data:$("#formInicio").serialize(),
                cache:false,
                success:function(respAX){
                    //Aquí llega la respuesta del servidor en formato JSON y no olvidemos que JSON NO hace nada, debemos convertirlo en algo que JS entienda y a partir de aquí acceder mediante notación punto o la que sea necesaría a toda la información disponible.
                    var AX = JSON.parse(respAX);
                    var titulo = "<h2>ESCOMida</h2>";
                    $.alert({
                        title:titulo,
                        content:AX.msj,
                        icon:"fas fa-cogs fa-2x",
                        theme:"supervan",
                        onDestroy:function(){
                            if(AX.val == 0){
                                //Significa que no se encontraron registros con los datos proporcionados, indicarlo al usuario y presentarle nuevamente el formulario para que lo intente nuevamente.
                                location.reload();
                            }
                            if(AX.val == 1){
                                //Significa que los datos fueron correctos, entonces indicarlo al usuario y en cuanto cierre el 'confirm' redireccionar automaticamete a la página exclusiva del alumno en cuestión.
                                location.replace("../index.php");
                            }
                        }
                    });
                }
            });
           
        }
    });

    $("#formInicioC").validetta({
        bubblePosition: "bottom",
        bubbleGapTop: 10,
        bubbleGapLeft: -5,
        onValid:function(e){
            e.preventDefault();
            $.ajax({
                url:"./sesionC.php",
                method:"POST",
                data:$("#formInicioC").serialize(),
                cache:false,
                success:function(respAX){
                    //Aquí llega la respuesta del servidor en formato JSON y no olvidemos que JSON NO hace nada, debemos convertirlo en algo que JS entienda y a partir de aquí acceder mediante notación punto o la que sea necesaría a toda la información disponible.
                    var AX = JSON.parse(respAX);
                    var titulo = "<h2>ESCOMida</h2>";
                    $.alert({
                        title:titulo,
                        content:AX.msj,
                        icon:"fas fa-cogs fa-2x",
                        theme:"supervan",
                        onDestroy:function(){
                            if(AX.val == 0){
                                //Significa que no se encontraron registros con los datos proporcionados, indicarlo al usuario y presentarle nuevamente el formulario para que lo intente nuevamente.
                                location.reload();
                            }
                            if(AX.val == 1){
                                //Significa que los datos fueron correctos, entonces indicarlo al usuario y en cuanto cierre el 'confirm' redireccionar automaticamete a la página exclusiva del alumno en cuestión.
                                location.replace("../index.php");
                            }
                        }
                    });
                }
            });
           
        }
    });

    $('#bringProducts').click(function (e) { 
        let search = $('#vdestinatario').val();
        e.preventDefault();
    
        $.ajax({
            url: 'bringtheProducts.php',
            type: 'POST',
            data:{search:search},
            cache:false,
            success: function(response){
                let issue= JSON.parse(response);
                
                let template='';
                issue.forEach(element => {
                    template += `
                    <tr>
                        <td>${element.nproducto}</td>
                        <td>${element.precio}</td>
                       
                    </tr>
                    `
                });
                $('#productos').html(template);
            }
        });
        
    });

    $('#EnviarPedido').click(function (e) { 
        let vendedor = $('#vdestinatario').val();
        let cliente = $('#cemisario').val();
        let hora = $('#horap').val();
        let salon = $('#salonp').val();
        let descripcion = $('#descripcionp').val();
       
        e.preventDefault();
    
        $.ajax({
            url: 'pedidoRealizado.php',
            type: 'POST',
            data:{vendedor:vendedor,cliente:cliente,hora:hora,salon:salon,descripcion:descripcion},
            cache:false,
            success: function(respAX){
                var AX = JSON.parse(respAX);
                var titulo = "<h2>ESCOMida</h2>";
                $.alert({
                    title:titulo,
                    content:AX.msj,
                    icon:"fas fa-cogs fa-2x",
                    theme:"supervan",
                    onDestroy:function(){
                        if(AX.val == 0){
                            //Significa que no se encontraron registros con los datos proporcionados, indicarlo al usuario y presentarle nuevamente el formulario para que lo intente nuevamente.
                           
                        }
                        if(AX.val == 1){
                            //Significa que los datos fueron correctos, entonces indicarlo al usuario y en cuanto cierre el 'confirm' redireccionar automaticamete a la página exclusiva del alumno en cuestión.
                            location.replace("../index.php");
                        }
                    }
                });
            }
        });
        
    });

   


});