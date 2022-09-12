<?php

     session_start();
    
    if(isset($_SESSION["idvendedor"]))
    {

     include 'conexion.php';

     $ID = $_SESSION["idvendedor"];

    
   
 ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
    <link href="../css/profilevendedor.css" rel="stylesheet"> 
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <link href="../plugins/validetta/validetta.min.css" rel="stylesheet">
     <link href="../plugins/confirm/jquery-confirm.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2&display=swap" rel="stylesheet"> 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
     <script src="../plugins/validetta/validetta.min.js"></script>
     <script src="../plugins/validetta/validettaLang-es-ES.js"></script>
     <script src="../plugins/confirm/jquery-confirm.min.js"></script>
     <script src="../js/perfilv.js"></script>
       

    <title>Perfil</title>
</head>
<body>

 

    <nav class="grey darken-1">
        <div class="nav-wrapper">
             <div class="container">
                 <a href="../index.php" class="brand-logo">ESCOMida</a>
                 <ul id="nav-mobile" class="right hide-on-med-and-down">
                       <li><a href="listaProductos.php?">Lista de productos</a></li>
                       <li><a href="#">Nosotros</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section>
        <div class="row">
            <div class="mleft col m1 s0 white"></div>
            <div class="vprofilepic col m3 s12 grey lighten-2">
                <div class="vprofilepic1 col m12 s12 valign-wrapper" id="spic">

                </div>
                <div class="profilepic12 col m12 s12">
                     <form action="modificarpic.php" id="modpic" method="POST" enctype="multipart/form-data">
                           <input type="hidden" id="idv2" name="idv2" value="<?php echo $ID; ?>">
                           <input type="file" name="imagen" placeholder="Seleccione una imagen" id="newimg" required>
                           <button type="submit" class="btn grey darken-3 waves-effect waves-light">Cambiar Foto de perfil</button>
                    </form>
                    <hr>
                </div>
                <div class="vprofilepic2 col m12 s12 center-align grey darken-3 white-text" id="sinf">
                   

                </div>
                
            </div>
            <div class="vprofileinf col m7 s12 grey lighten-3" ></div>
            <div class="mright col m1 s0 white"></div>
        </div>
    </section>
    
      <div class="row">
              <form id="formupic">
                     <input type="hidden" id="idv" name="idv" value="<?php echo $ID; ?>">
              </form>
              
          <div class="col s12 m4" id="sellerpic">
                
         </div>
         
      </div>
    

     
</body>
</html
    <?php

    }else{
        header("location:./../index.php");
    }
    ?>
