<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container barra-nav pt-3 pb-3 pb-sm-5 px-0">
        <nav class="navbar navbar-expand-md px-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto mb-2 mb-sm-0">
                    <li class="nav-item pr-5 pl-2 pl-sm-0">
                        <a class="nav-link pt-1 <?php echo $pg == "inicio"? "active text-sm-center" : "text-left text-sm-center"; ?>" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item pr-5 pl-2 pl-sm-0">
                        <a class="nav-link pt-1 <?php echo $pg == "sobre-mi"? "active text-sm-center" : "text-left text-sm-center"; ?>" href="sobre-mi.php">Sobre mi</a>
                    </li>
                    <li class="nav-item pr-5 pl-2 pl-sm-0">
                        <a class="nav-link pt-1 <?php echo $pg == "proyectos"? "active text-sm-center" : "text-left text-sm-center"; ?>" href="proyectos.php">Proyectos</a>
                    </li>
                    <li class="nav-item pr-5 pl-2 pl-sm-0">
                        <a class="nav-link pt-1 <?php echo $pg == "contacto"? "active text-sm-center" : "text-left text-sm-center"; ?>" href="contacto.php">Contacto</a>
                    </li>
                </ul>
                <a href="files/CV_Israel_Short.pdf" target="_blank" class="descarga-cv py-1 px-3">DESCARGÁ MI CV <i class="fas fa-arrow-down"></i></a>
            </div>
        </nav>
    </div>
</body>
</html>