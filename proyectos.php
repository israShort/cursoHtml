<?php
    $pg = "proyectos";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos | Mi Portfolio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body id="proyectos">
    <div class="container proyectos-main">
        <header>
            <?php include_once("menu.php"); ?>
        </header>
        <main class="container">
            <div class="row pt-2 pt-sm-4 mb-3 mb-sm-0">
                <div class="col-sm-7 col-12">
                    <h1>Mis proyectos</h1>
                    <div class="my-2 mt-sm-4 mb-sm-5">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio doloremque harum, molestias, nam mollitia sapiente quaerat aperiam et dolore rem atque quos neque odio consequatur magni molestiae! Nam, id sapiente. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente aut voluptas ex velit atque excepturi adipisci nisi sed?</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-sm-4 col-12 p-0 pb-5 mb-4 mb-sm-0 div">
                    <img src="images/abm.png" class="m-3">
                    <h2 class="pl-3 py-3">ABM CLIENTES</h2>
                    <p class="pl-3 pr-4 pt-2">Alta, Baja, modificación de un registro de clientes empleando:. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                    <div class="btn-group mb-3">
                        <div class="col-6">
                            <button type="submit" class="btn">VER ONLINE</button> <!--arreglar el tamaño del bloque con height en vez de padding y position:absolute-->
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn code" >CÓDIGO FUENTE</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12 p-0 pb-5 mb-4 mb-sm-0 div">
                    <img src="images/sgv.png" class="m-3">
                    <h2 class="pl-3 py-3">SISTEMA DE GESTIÓN DE VENTAS</h2>
                    <p class="pl-3 pr-4 pt-2">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</P>
                    <div class="btn-group mb-3">
                        <div class="col-6">
                            <button type="submit" class="btn">VER PROYECTO</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn code">CÓDIGO FUENTE</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12 p-0 pb-5 mb-4 mb-sm-0 mt-lg-4 mt-xl-0 div">
                    <img src="images/pi.png" class="m-3">
                    <h2 class="pl-3 py-3">PROYECTO INTEGRADOR</h2>
                    <p class="pl-3 pr-4 pt-2">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                    <div class="btn-group mb-3">
                        <div class="col-6">
                            <button type="submit" class="btn">VER PROYECTO</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn code">CÓDIGO FUENTE</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <footer class="container">
        <div class="row text-sm-left text-center mb-3 mb-sm-1 mb-lg-3 mb-xl-1">
            <div class="col-12 col-sm-2 ml-sm-3 pl-0 pr-1 pr-sm-0 iconos">
                <a href="https://github.com/israShort" target="_blank" title="Github"><i class="fab fa-github m-2 m-sm-1"></i></a>
                <a href="https://www.linkedin.com/in/israel-short-4b3779148/" target="_blank" title="Linkedin"><i class="fab fa-linkedin m-2 m-sm-1"></i></a>
            </div>
            <div class="col-12 col-sm-3 mt-2 mt-sm-0">
                <a href="https://depcsuite.com/?v=d72a48a8ebd2" target="_blank" title="Whatsapp">Sponsor <span class="destacado">DePC Suite</span></a>
            </div>
            <div class="col-12 col-sm-3 mt-2 mt-sm-0">
                <a href="mailto:info@depcsuite.com" target="_blank" title="Mail">info@depcsuite.com</a>
            </div>
            <div class="col-sm-4 col-12 text-center text-sm-right">
                <a href="https://wa.me/5491122543823" target="_blank" title="Whatsapp"><i class="fab fa-whatsapp pt-3 pb-3 pb-sm-5 pr-4 pl-4"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>