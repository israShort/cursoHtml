<?php
    $pg = "contacto";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Mi Portfolio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body id="contacto">
    <div class="container contacto-main">
        <header>
            <?php include_once("menu.php"); ?>
        </header>
        <main class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contacto</h1>
                </div>
            </div>
            <div class="row mt-3 mt-sm-4">
                <div class="col-sm-5 col-12 pr-3 pr-sm-5">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ipsa aliquam itaque autem!
                        Repellendus pariatur, ipsa itaque enim natus amet culpa reprehenderit? Libero, dolore quo. Quis
                        reiciendis cum qui ipsam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit
                        voluptatum in dignissimos reiciendis, enim possimus cum praesentium ab illo, voluptas nulla aliquam
                        iure commodi aliquid ex doloribus magnam ipsa sit.</p>
                </div>
                <div class="col-sm-6 col-12 offset-sm-1">
                    <form action="" method="POST">
                        <div class="mb-2">
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="mb-2">
                            <input type="email" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <textarea name="txtComentarios" id="txtComentarios" rows="8" class="form-control"
                                placeholder="Comentarios..."></textarea>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-sm-6 col-12 mt-2 mt-sm-0">
                            <div class="g-recaptcha" data-sitekey="6LcS_8QZAAAAAE55JZregxpFmO8ARGKf9oGiESHB"></div>
                        </div>
                        <div class="col-sm-6 col-12 mt-4 mt-sm-2 text-center text-sm-right"> <!--text-right para alinear a la derecha-->
                            <button type="submit" class="btn">ENVIAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <footer class="container mt-2 mt-sm-0 px-0 pb-2 pb-sm-3">
        <?php include_once("footer.php"); ?>
    </footer>
</body>

</html>