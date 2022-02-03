<?php
    require_once 'includes/init.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/proyectos.css">
    <title>Miniatures Scorpions</title>
</head>

<body>
    <nav class="nav">
        <div class="nav__container">

            <h1 class="nav__logo">Sergio Web</h1>

            <label for="menu" class="nav__label">
                <img src="./images/menu.svg" alt="" class="nav__img">
            </label>
            <input type="checkbox" id="menu" class="nav__input">

            <div class="nav__menu">
                <a href="#" class="nav__item">Inicio</a>
                <a href="./views/galeria.php" class="nav__item">Galeria</a>
                <a href="./views/login_registro.php" class="nav__item">Login|Registro</a>
            </div>
        </div>
    </nav>
    <main>
        <div class="header">
            <img class="header" src="./images/cabecera.jpg" alt="">
        </div>
        <div>
            <h1 class="title">GALERIA DE IMÁGENES</h1>
            <p>
                ¡Bienvenidos a todos!<br>
                Os presentamos una nueva Web para que podaís subir vuestras imágenes de miniaturas y que puedan ser
                votadas por los usuarios.
                La idea es crear una comunidad de pintores para mostrar sus trabajos y poder intercambiar impresiones e
                ideas sobre el mundo del modelismo.
                Para aquellos que buscan un nuevo sitio web para disfrutar del mundo de las miniaturas, no busques más,
                este es su lugar....
            </p>
        </div>
        <section class="projects">
            <div class="container">
                <h2 class="subtitle">ORCOS</h2>
                <div class="projects__grid">
                    <article class="projects__item">
                        <img loading="lazy" src="./images/orcos/orco1.jpg" alt="" class="projects__img">
                        <div class="projects__hover">
                            <h2 class="projects__title">Usuario 1</h2>
                            <i class="far fa-file-alt projects__icon"></i>
                        </div>
                    </article>
                    <article class="projects__item">
                        <img loading="lazy" src="./images/orcos/orco2.jfif" alt="" class="projects__img">
                        <div class="projects__hover">
                            <h2 class="projects__title">Usuario 2</h2>
                            <i class="far fa-file-alt projects__icon"></i>
                        </div>
                    </article>
                    <article class="projects__item">
                        <img loading="lazy" src="./images/orcos/orco3.jpg" alt="" class="projects__img">
                        <div class="projects__hover">
                            <h2 class="projects__title">Usuario 3</h2>
                            <i class="far fa-file-alt projects__icon"></i>
                        </div>
                    </article>
                    <article class="projects__item">
                        <img loading="lazy" src="./images/orcos/orco4.jfif" alt="" class="projects__img">
                        <div class="projects__hover">
                            <h2 class="projects__title">Usuario 4</h2>
                            <i class="far fa-file-alt projects__icon"></i>
                        </div>
                    </article>
                    <article class="projects__item">
                        <img loading="lazy" src="./images/orcos/orco5.png" alt="" class="projects__img">
                        <div class="projects__hover">
                            <h2 class="projects__title">Usuario 5</h2>
                            <i class="far fa-file-alt projects__icon"></i>
                        </div>
                    </article>
                </div>
            </div>
            <div class="container">
                <h2 class="subtitle">ELFOS</h2>
                <div class="projects__grid">
                    <article class="projects__item">
                        <img loading="lazy" src="./images/orcos/orco1.jpg" alt="" class="projects__img">
                        <div class="projects__hover">
                            <h2 class="projects__title">Usuario 1</h2>
                            <i class="far fa-file-alt projects__icon"></i>
                        </div>
                    </article>
                    <article class="projects__item">
                        <img loading="lazy" src="./images/orcos/orco2.jfif" alt="" class="projects__img">
                        <div class="projects__hover">
                            <h2 class="projects__title">Usuario 2</h2>
                            <i class="far fa-file-alt projects__icon"></i>
                        </div>
                    </article>
                    <article class="projects__item">
                        <img loading="lazy" src="./images/orcos/orco3.jpg" alt="" class="projects__img">
                        <div class="projects__hover">
                            <h2 class="projects__title">Usuario 3</h2>
                            <i class="far fa-file-alt projects__icon"></i>
                        </div>
                    </article>
                    <article class="projects__item">
                        <img loading="lazy" src="./images/orcos/orco4.jfif" alt="" class="projects__img">
                        <div class="projects__hover">
                            <h2 class="projects__title">Usuario 4</h2>
                            <i class="far fa-file-alt projects__icon"></i>
                        </div>
                    </article>
                    <article class="projects__item">
                        <img loading="lazy" src="./images/orcos/orco5.png" alt="" class="projects__img">
                        <div class="projects__hover">
                            <h2 class="projects__title">Usuario 5</h2>
                            <i class="far fa-file-alt projects__icon"></i>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>

</html>