$(document).ready(function () {

    perfilvendor();
    infovendedor();
    
    function perfilvendor(){

        var contenido= document.getElementById('sellerpic');
        let formu=document.getElementById('formupic')
    
        let datos= new FormData(formu);

        var init={
           method:'POST',
           body:datos
        };

       
        fetch('./bringSeller.php',init)
            .then(res=> res.json())     //los then son promesas y se usan para darle formato al objeto traído y definir como lo mostraremos
            .then(data=>{           //then es la forma de operar que tiene fetch
                let template='';
                data.forEach(element => {
                   
                    template += `
                    <img src="data:image/jpg;base64,${element.imagenvendedor}" height="160px" width="250px">
                    `
                });
                $('#spic').html(template);
            })

        
    }

    function infovendedor(){
        let formid=document.getElementById('formupic');

        let info=new FormData(formid);
        var init={
            method:'POST',
            body:info
        };

        fetch('./bringSeller.php',init)
        .then(res=>res.json())
        .then(data=>{
            let template='';
            data.forEach(element=>{
                template += `
                <p>Información de perfil del vendedor:</p>
                <h4>ID: ${element.idvendedor}</h4>
                <h4>${element.nombrevendedor}</h4>
                <p>${element.descripcionvendedor}</p>
                `
            });
            $('#sinf').html(template);
        })
    }


    $('#modpic').submit(function (e) { 
        e.preventDefault();
        let formu=document.getElementById('modpic')
    
        let datos= new FormData(formu);

        var init={
           method:'POST',
           body:datos
        };

        fetch('./modificarpic.php',init)
             .then(res=> res.json())
             .then(rst=>{
                 if(rst.val==1){
                     location.reload();
                 }
                 else{
                     alert("No se pudo cambiar la imagen, revise el archivo que subió");
                 }
             })
        
    });
        
});