
$(document).ready(function () {


    
    listaProductos();
    bringimagesp();

function listaProductos(){

    var idseller=$('#idvend').val();
     var data={idseller:idseller}

    fetch('bringproducts.php',{
        method:'POST',
        body: JSON.stringify(data), // data can be `string` or {object}!
        headers:{
            'Content-Type': 'application/json'
        }
    })
    .then(res=>res.text())
    .then(answ=>{
        
        let issue=JSON.parse(answ);
            
        let template='';
        issue.forEach(element => {
           
            template += `
                <h4>ID: ${element.idvendedor}</h4>
                <h3>vendedor ${element.nombrevendedor}</h3>
                <h4>${element.descripcionvendedor}</h4>
                <h4>Calificación por los usuarios:</h4>
                <a href="#"><i class="fas fa-drumstick-bite"></i></a>
                <a href="#"><i class="fas fa-drumstick-bite"></i></a>
                <a href="#"><i class="fas fa-drumstick-bite"></i></a>
                <a href="#"><i class="fas fa-drumstick-bite"></i></a>
                <a href="#"><i class="fas fa-drumstick-bite"></i></a> 
            `
        });
        $('#idvend1').html(template);
    })
}



   function bringimagesp(){
       
    let idvend=$('#idvend').val();
    let imgn1=document.getElementById('img1');
    let imgn2=document.getElementById('img2');
    let imgn3=document.getElementById('img3');
    let imgn4=document.getElementById('img4');
    let imgn5=document.getElementById('img5');
   

    $.ajax({
        url:'./bringimagesp.php',
        type:'POST',
        data:{idvend:idvend},
        cache:false,
        success: function (response){
             var i=0;

            let products= JSON.parse(response);


            
            products.forEach(element=>{
                
               let byteCharacters=atob(element.imgvendedor);
               const byteNumbers = new Array(byteCharacters.length);
               for (let i = 0; i < byteCharacters.length; i++) {
                   byteNumbers[i] = byteCharacters.charCodeAt(i);
               }

               const byteArray = new Uint8Array(byteNumbers);
               const blob = new Blob([byteArray], {type: 'image/jpg'});

               let objurl=URL.createObjectURL(blob);

               console.log(objurl);
            
               if(i==0){
                   imgn1.src=objurl;
               }
               else if(i==1){
                   imgn2.src=objurl;
               }
               else if(i==2){
                   imgn3.src=objurl;  
               }
               else if(i==3){
                   imgn4.src=objurl;
               }
               else if(i==4){
                   imgn5.src=objurl;
               }

                i++;
            });

            
        }

    });
   }
});
