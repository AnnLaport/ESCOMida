<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2&display=swap" rel="stylesheet"> 
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <link href="../plugins/validetta/validetta.min.css" rel="stylesheet">
     <link href="../plugins/confirm/jquery-confirm.min.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
     <script src="../plugins/validetta/validetta.min.js"></script>
     <script src="../plugins/validetta/validettaLang-es-ES.js"></script>
     <script src="../plugins/confirm/jquery-confirm.min.js"></script>
     <script src="../js/registro.js"></script>
       

    <title>Registro</title>
</head>
<body>
    <nav class="grey darken-1">
        <div class="nav-wrapper">
             <div class="container">
                 <a href="index.html" class="brand-logo">ESCOMida</a>
                 <ul id="nav-mobile" class="right hide-on-med-and-down">
                       <li><a href="#">Nosotros</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <br><br>
    
  <div class="container">
      <h4>Actualizar perfil</h4>
      <br>
      <form id="formActulizar" autocomplete="on" action="actualizarPerfilC.php" method="post" >

	
          <input type="text" id="username" placeholder="Nombre de usuario" name="Nombre" maxlength="20" data-validetta="required,minLength[3],maxLength[20]">
          <button name="EnviarA" class="waves-effect grey darken-1 btn" type="submit"><i class="far fa-share-square"></i>Aplicar cambios</button>

      </form>
 </div>


 
</body>
</html>
