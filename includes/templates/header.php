<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/build/css/app.css">
    <title>Bienes Raices</title>
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/bienesraices">
                    <img src="/build/img/logo.svg" alt="logo-bienes-raices" />
                </a>
                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="menu" />
                </div>

                <div class="derecha">
                    <img src="/build/img/dark-mode.svg" alt="dark-mode" class="dark-mode-boton" />
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncio</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div>
            <?php if($inicio) { ?>
                <h1>Venta de casas y departamentos. Exclusivos y de lujo</h1>
            <?php } ?>

        </div>
    </header>