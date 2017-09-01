<?php
  
  
      /*$_SESSION['user'] = $user;
 

    if(empty($_SESSION['user'])) { 
        header('Location: login.html');
    } */
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script type="text/javascript">
            
            
            
            function agregar(dato){
                var _html;
                _html=document.getElementById("carrito").innerHTML;
                document.getElementById("carrito").innerHTML+"<div" + dato + "</div>";
                
                $(document).ready (function(){
                    
               var agregar = function (evento){
                   
                $("#ComprasWeb.html").load("nuevahtml.html"));
               };
                
                $("#juegosAutos").click(agregar);
                $("#juegosArcade").click(agregar);
                $("#juegosCombate").click(agregar);
                
                });
        </script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">GAMEMAN</h1>
                <nav>
                    <ul>
                        <li><a href="index.html" onclick="inicio('inicio')">INICIO</a></li>
                        
                    </ul>
                </nav>
            </header>
        </div>
        
        

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                    </header>
                    
                        
                    <div id="juegosAutos">
                        <h1>NFS: CARTAGENA</h1>
                        Precio: 60EUR
                        <br><br>
                        <button id="primerProducto">Agrgar Al Carrito</button>
                        <a href="detalleProducto.php?producto=1">Ver Detalle</a>
                                              
                    </div>
                    <hr>
                        

                    <section>
                        <h2>BATTLE STREET: CARTAGENERO (Con puñalá)</h2>
                        Precio: 60EUR <br><br>
                        <button id="segundoProducto">Agrgar Al Carrito</button>
                        <a href="detalleProducto.php?producto=2">Ver Detalle</a>
                    </section>
                            <hr>
                    <section>
                        <h2>GTA: CARTEGENA STORIES</h2>
                        Precio: 60EUR <br><br>
                    <button id="tercerProducto">Agrgar Al Carrito</button>
                    <a href="detalleProducto.php?producto=3">Ver Detalle</a>
                    
                    <hr>
                    </section>
                    <footer>
                        <h3>Consejos para no perder la calma en multijugador</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor.</p>
                    </footer>
                </article>
                

                <aside>
                    <h3>Sugerencia</h3>
                    <p>Antes de Comprar:
                    <br>-Cada producto es original,&nbsp; <br>-Descuento de un 8% via web.&nbsp;
                    <br>-Consulta el precio de envio con alguno de nuestros agentes.

                    </p>
                </aside>
                <br>
                <aside id="carrito">
                    <h3>Carrito de Compras</h3>
                    
                </aside>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>footer</h3>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
            
            console.log("HOla");
            var primerProducto = document.getElementById("primerProducto")
            var segundoProducto = document.getElementById("segundoProducto");
            var tercerProducto = document.getElementById("tercerProducto");
            
            primerProducto.addEventListener("click",function(event){
                var carrito = document.getElementById("carrito");
                carrito.innerHTML = carrito.innerHTML + "NFS: Cartagena<br>";
            });
            
            segundoProducto.addEventListener("click",function(event){
                var carrito = document.getElementById("carrito");
                carrito.innerHTML = carrito.innerHTML + "Battle Street<br>";
            });
            tercerProducto.addEventListener("click",function(event){
                var carrito = document.getElementById("carrito");
                carrito.innerHTML = carrito.innerHTML + "GTA San Andreas<br>";
            });
        </script>
    </body>
</html>
