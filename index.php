<?php
    /*
        Esta página es exclusiva de un alumno que se haya autentificado por medio del login. Un acceso directo a ésta deberá de ser rechazado. Aquí aparecen las sesiones en escena para cuidar este 'detalle'.
    */

    session_start();

?>

<!DOCTYPE html>
<head>
    <html lang="en">
    <meta charset="utf-8">
    <meta name="keywords" content="juegos, olimpicos, tokyo, 2020">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Proyecto para hacer pedidos a los comerciantes de ESCOM">
    <title>ESCOMIDA</title>
    
   
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/Maquetacion2Style.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <script src="./js/menu.js"></script>
    

</head>
<body>
    <div class="container">
         <header class="header">
           <div class="menu margen-interno">
             <div class="logo">
                 <a href="index.php">ESCOMida</a>
             </div>
             <div class="nav">
                 <?php   if(isset($_SESSION["idcliente"])){
                     ?>
                       <a href="servidor/perfilCliente.php" title="Ver Perfil"><i class="fas fa-candy-cane"></i><span class="off">Ver Perfil</span></a>
                       <a href="#" title="Ver Notificaciones"><i class="fas fa-candy-cane"></i><span class="off">Notificaciones</span></a>
                       <a href="./servidor/cerrarSesion.php?nombreSesion=idcliente" title="Cerrar Sesión"><i class="fas fa-candy-cane"></i><span class="off">Cerrar Sesión</span></a>
                 <?php }elseif(isset($_SESSION["idvendedor"])){?>  

                       <a href="servidor/perfilVendedor.php" title="Ver Perfil"><i class="fas fa-candy-cane"></i><span class="off">Ver Perfil</span></a>
                       <a href="./servidor/verpedidos.php" title="Ver Pedidos"><i class="fas fa-candy-cane"></i><span class="off">Ver Pedidos</span></a>
                       <a href="./servidor/cerrarSesion.php?nombreSesion=idvendedor" title="Cerrar Sesión"><i class="fas fa-candy-cane"></i><span class="off">Cerrar Sesión</span></a>
               
                <?php   }else{

                ?>
                 <a href="./servidor/iniciosesion.php" title="Iniciar Sesión"><i class="fas fa-sign-in-alt"></i><span class="off">Iniciar Sesión</span></a>
                 <a href="./servidor/registro.php" title="Registrate"><i class="fas fa-candy-cane"></i><span class="off">Registrate</span></a>
                 <a href="#" title="Nosotros"><i class="fas fa-users"></i><span class="off">Nosotros</span></a>
                 <a href="#" title="Contacto"><i class="fas fa-tty"></i><span class="off">Contacto</span></a>

                 <?php  } ?>
             </div>
             <div class="social">
                 <div><a href="#"><i class="fab fa-facebook"></i></a></div>
                 <div><a href="#"><i class="fab fa-instagram"></i></a></div>
             </div>
            </div>

            <div class="texto-principal margen-interno">
                <h1>"No dejes para mañana lo que puedes comerte hoy"</h1>
            </div>
         </header>
         

        <section class="section margen-interno">
            <div class="articulos">
                <article class="article">
                <img src="images/aviso.jpg" alt="vendedor" width="500px" height="300px">

                   <h3>Quieres ser parte de la comunidad?</h3>
                   <h2>Registrate!</h2>
                   <p>Registrarte  y mostrar tus productos es gratis!</p>
                </article> 
               <article class="article" id="VActivo">
                
               </article>
                <!-- <article class="article">
                <img src="images/friendseating.jpg" alt="vendedor">
                 <h3>Descripción de lo que vende</h3>
                <h2>Nombre del vendedor</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique non minus rerum aperiam aut! Enim nemo totam non magni ea?</p>
                <a href="#">Leer más...</a> 
               </article>
               <article class="article">
                <img src="images/friendseating.jpg" alt="vendedor">
                <h3>Descripción de lo que vende</h3>
                <h2>Nombre del vendedor</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique non minus rerum aperiam aut! Enim nemo totam non magni ea?</p>
                <a href="#">Leer más...</a> 
               </article> 
                <nav class="navegacion">
                   <a href="#">Home</a>
                   <a href="#">1</a>
                   <a href="#">2</a>
                   <a href="#">3</a>
                   <a href="#">Final</a>
               </nav>  -->
            </div>
        
           <aside class="aside">
               <div class="publicidad">
                   <h4>Publicidad</h4>
                   <img src="images/pepsi.jpg" alt="vendedor" height="280px" width="400px">
               </div>
               <div class="publicidad">
                <h4>Publicidad</h4>
                <img src="images/adidas.jpg" alt="vendedor" height="280px" width="400px">
               </div>
           </aside>
        </section>
         <footer class="footer margen-interno">
             <div class="pie">
                 <a href="#">Desarrollado por Equipo de ESCOMida</a>
             </div>
         </footer>
    </div>
</body>
</html>
