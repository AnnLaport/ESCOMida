<?php


      session_start();

      if(isset($_SESSION['idcliente'])){

        $varvend=$_REQUEST['numID'];

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Products of the seller">
    <meta name="keywords" content="seller, products, escom, food, students">
    <link rel="stylesheet" href="./products.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
             
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems,{
                indicators:true
            });
        });
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <script src="./bringproducts.js"></script>


    <title>Document</title>
</head>

<body>

    <nav>
        <div class="nav-wrapper blue-grey">
            <div class="container">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="container">
        <div class="container1">


            <header>
                <div class="infoseller center-align">
                    
                        <input type="hidden" name="idvend" id="idvend" value="<?php echo $varvend; ?>">
                   
                  <div class="datosvend" id="idvend1">
                    
                  </div>
                   
                </div>
            </header>

            <section>
                <div class="fullinfo blue-grey lighten-5">
                    <div class="products blue-grey darken-4">
                        <div class="carousel carousel-slider" id="imgsproducts">
                            <a href="" class="carousel-item">
                                <img src="" alt="img1" id="img1">
                            </a>
                            <a href="" class="carousel-item">
                                <img src="" alt="img2" id="img2">
                            </a>
                            <a href="" class="carousel-item">
                                <img src="" alt="img3" id="img3">  
                            </a>
                            <a href="" class="carousel-item">
                                <img src="" alt="img4" id="img4">
                            </a>
                            <a href="" class="carousel-item">
                                <img src="" alt="img5" id="img5">
                            </a>
                        </div>
                    </div>
                    <div class="qualification  #f3e5f5 white">
                        <h4>Comentarios sobre éste vendedor:</h4>
                        <p>La neta las brochetas esta bien chidorris</p>
                        <p>Muy bien, seguí así</p>
                        <p>Para cuando panquesitos de almendras??</p>
                    </div>
                </div>
            </section>

           
        </div>
    </div>

        <footer class="page-footer blue-grey">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">Footer Content</h5>
                  <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Links</h5>
                  <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              © 2014 Copyright Text
              <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
              </div>
            </div>
          </footer>



</body>

</html>

<?php

      }else{
        //NO se detectó la sesion que hubo de generarse después de pasar por el login, entonces es un intento de acceso no autorizado, lo redireccionamos a la pantalla correspondiente
        header("location:./../index.php");
    }
?>