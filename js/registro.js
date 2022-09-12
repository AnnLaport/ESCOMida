$(document).ready(function () {

    traerProductos();

    function traerProductos(){

        let idvendedor=$('#gotid').val();
        $.ajax({
            url: 'bringVProducts.php',
            type: 'GET',
            data:{idvendedor:idvendedor},
            cache:false,
            success: function(response){

                let issue= JSON.parse(response);
                
                let template='';
                issue.forEach(element => {
                    template += `
                    <tr pedido="${element.idpedido}">
                        <td>${element.vdescripcion}</td>
                        <td>${element.vhorapedido}</td>
                        <td>${element.vsalon}</td>
                        <td><input type="hidden"  value="${element.idpedido}"><button class="borrar-pedido waves-effect grey darken-1 btn" id="eliminaPedido" type="submit"><i class="far fa-share-square"></i>Eliminar Pedido</button>
                        </td>
                    </tr>
                    `
                });
                $('#clients').html(template);
            }
        });
    }

    $('#eliminarPedido').click(function(e){
        e.preventDefault();

         const postSeller={
                description:$('#description').val(),
                nombre:$('#username').val(),
                patname:$('#patname').val(),
                motname:$('#motname').val(),
                correo:$('#email').val(),
                telefono:$('#phone').val(),
                contrasena:$('#password').val(),
                repcontrasena:$('#rpassword').val(),
                clientorvend:$('#corv').prop('checked'),
                
            };

            $.post('./agregar_usuario.php',postSeller,function(response){

                var AX = JSON.parse(response);
                var titulo = "<h2>Preinscripciones ESCOM</h2>";

                $.alert({
                    title:titulo,
                    content:AX.msj,
                    icon:"fas fa-cogs fa-2x",
                    theme:"supervan",
                    onDestroy:function(){
                        if(AX.val == 0){
                           
                        }
                        if(AX.val == 1){
                            //Significa que los datos fueron correctos, entonces indicarlo al usuario y en cuanto cierre el 'confirm' redireccionar automaticamete a la página exclusiva del alumno en cuestión.
                            location.replace("../index.php");
                        }

                        
                    }
                });
                

            });

    })

    

   

    $('#formRegistro').validetta({
        bubblePosition: "bottom",
        bubbleGapTop: 10,
        bubbleGapLeft: -5,
        onValid:function(e){

           
            const postSeller={
                description:$('#description').val(),
                nombre:$('#username').val(),
                patname:$('#patname').val(),
                motname:$('#motname').val(),
                correo:$('#email').val(),
                telefono:$('#phone').val(),
                contrasena:$('#password').val(),
                repcontrasena:$('#rpassword').val(),
                clientorvend:$('#corv').prop('checked'),
                
            };

            $.post('./agregar_usuario.php',postSeller,function(response){

                var AX = JSON.parse(response);
                var titulo = "<h2>ESCOMida</h2>";

                $.alert({
                    title:titulo,
                    content:AX.msj,
                    icon:"fas fa-cogs fa-2x",
                    theme:"supervan",
                    onDestroy:function(){
                        if(AX.val == 0){
                           
                        }
                        if(AX.val == 1){
                            //Significa que los datos fueron correctos, entonces indicarlo al usuario y en cuanto cierre el 'confirm' redireccionar automaticamete a la página exclusiva del alumno en cuestión.
                            location.replace("../index.php");
                        }

                        
                    }
                });
                

            });

            e.preventDefault();
        }
    });


    $(document).on('click','.borrar-pedido', function(){
        let element=$(this)[0].parentElement.parentElement;
        pedido=$(element).attr('pedido');
        
        $.post('eliminarPedidos.php',{pedido}, function(response){
            traerProductos();
        })
    })
            

});