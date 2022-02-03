<?php
    
    
    // include_once ('../includes/classes/conexion_bd.php');
    // include_once ('../includes/classes/usuario.php');
    include_once '../includes/init.php';

    $usuario = isset($_SESSION['usuario'])?$_SESSION['usuario']:'Prueba';

    $prueba = Usuario::getUsuario($usuario);

    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/home.css">
    
    <link rel="stylesheet" href="../css/estrellas.css">
    <title>Home</title>
</head>
<body>
    <nav class="nav">
        <div class="nav__container">

            <p><?= $prueba ?></p>
            <label for="menu" class="nav__label">
                <img src="../images/menu.svg" alt="" class="nav__img">
            </label>
            <input type="checkbox" id="menu" class="nav__input">

            <div class="nav__menu">
                <a href="../index.php" class="nav__item">Inicio</a>
                <a href="../views/galeria.php" class="nav__item">Galeria</a>
                <a href="../includes/cerrar_sesion.php" class="nav__item">Log out</a>
            </div>
        </div>
    </nav>
    <img class="header" src="../images/cabecera.jpg" alt="">
    <h1 class="titulo">Bienvenido <?= $prueba ?></h1>
    <main>
        <div class="container">
            <div class="card">
                <div class="imgBx">
                    <img src="../images/orcos/orco1.jpg" alt="">
                </div>
                <div class="content">
                    <form class="clasificacion" id="form1" action="" method="">
                        <h2>Imagen 1</h2>
                        <h5>Deja tu calificación </h5>
                        <!-- svg from https://es.wikipedia.org/wiki/Archivo:Star*.svg -->

                        <input id="rating0" type="radio" value="0" name="rating" checked />
                        <label class="star" for="rating1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15" 
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating1" type="radio" value="1" name="rating" />

                        <label class="star" for="rating2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating2" type="radio" value="2" name="rating" />

                        <label class=star for=rating3>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating3" type="radio" value="3" name="rating" />

                        <label class="star" for="rating4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating4" type="radio" value="4" name="rating" />

                        <label class="star" for="rating5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating5" type="radio" value="5" name="rating" />

                        <!-- por último el label del rating 0 ( sin calificar ) -->
                        <label class="reset" for="rating0">reset</label>

                        <div id="texto">sin calificar</div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="../images/orcos/orco5.png" alt="">
                </div>
                <div class="content">
                <form class="clasificacion" id="form2" action="" method="">
                        <h2>Imagen 1</h2>
                        <h5>Deja tu calificación </h5>
                        <!-- svg from https://es.wikipedia.org/wiki/Archivo:Star*.svg -->

                        <input id="rating0" type="radio" value="0" name="rating" checked />
                        <label class="star" for="rating1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15" 
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating1" type="radio" value="1" name="rating" />

                        <label class="star" for="rating2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating2" type="radio" value="2" name="rating" />

                        <label class=star for=rating3>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating3" type="radio" value="3" name="rating" />

                        <label class="star" for="rating4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating4" type="radio" value="4" name="rating" />

                        <label class="star" for="rating5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating5" type="radio" value="5" name="rating" />

                        <!-- por último el label del rating 0 ( sin calificar ) -->
                        <label class="reset" for="rating0">reset</label>

                        <div id="texto">sin calificar</div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="../images/orcos/orco3.jpg" alt="">
                </div>
                <div class="content">
                <form class="clasificacion" id="form3" action="" method="">
                        <h2>Imagen 1</h2>
                        <h5>Deja tu calificación </h5>
                        <!-- svg from https://es.wikipedia.org/wiki/Archivo:Star*.svg -->

                        <input id="rating0" type="radio" value="0" name="rating" checked />
                        <label class="star" for="rating1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15" 
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating1" type="radio" value="1" name="rating" />

                        <label class="star" for="rating2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating2" type="radio" value="2" name="rating" />

                        <label class=star for=rating3>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating3" type="radio" value="3" name="rating" />

                        <label class="star" for="rating4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating4" type="radio" value="4" name="rating" />

                        <label class="star" for="rating5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating5" type="radio" value="5" name="rating" />

                        <!-- por último el label del rating 0 ( sin calificar ) -->
                        <label class="reset" for="rating0">reset</label>

                        <div id="texto">sin calificar</div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="../images/elfos/elfo1.jpg" alt="">
                </div>
                <div class="content">
                <form class="clasificacion" id="form4" action="" method="">
                        <h2>Imagen 1</h2>
                        <h5>Deja tu calificación </h5>
                        <!-- svg from https://es.wikipedia.org/wiki/Archivo:Star*.svg -->

                        <input id="rating0" type="radio" value="0" name="rating" checked />
                        <label class="star" for="rating1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15" 
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating1" type="radio" value="1" name="rating" />

                        <label class="star" for="rating2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating2" type="radio" value="2" name="rating" />

                        <label class=star for=rating3>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating3" type="radio" value="3" name="rating" />

                        <label class="star" for="rating4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating4" type="radio" value="4" name="rating" />

                        <label class="star" for="rating5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating5" type="radio" value="5" name="rating" />

                        <!-- por último el label del rating 0 ( sin calificar ) -->
                        <label class="reset" for="rating0">reset</label>

                        <div id="texto">sin calificar</div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="../images/elfos/elfo2.jpg" alt="">
                </div>
                <div class="content">
                <form class="clasificacion" id="form5" action="" method="">
                        <h2>Imagen 1</h2>
                        <h5>Deja tu calificación </h5>
                        <!-- svg from https://es.wikipedia.org/wiki/Archivo:Star*.svg -->

                        <input id="rating0" type="radio" value="0" name="rating" checked />
                        <label class="star" for="rating1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15" 
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating1" type="radio" value="1" name="rating" />

                        <label class="star" for="rating2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating2" type="radio" value="2" name="rating" />

                        <label class=star for=rating3>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating3" type="radio" value="3" name="rating" />

                        <label class="star" for="rating4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating4" type="radio" value="4" name="rating" />

                        <label class="star" for="rating5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating5" type="radio" value="5" name="rating" />

                        <!-- por último el label del rating 0 ( sin calificar ) -->
                        <label class="reset" for="rating0">reset</label>

                        <div id="texto">sin calificar</div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="../images/elfos/elfo3.jpg" alt="">
                </div>
                <div class="content">
                <form class="clasificacion" id="form6" action="" method="">
                        <h2>Imagen 1</h2>
                        <h5>Deja tu calificación </h5>
                        <!-- svg from https://es.wikipedia.org/wiki/Archivo:Star*.svg -->

                        <input id="rating0" type="radio" value="0" name="rating" checked />
                        <label class="star" for="rating1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15" 
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating1" type="radio" value="1" name="rating" />

                        <label class="star" for="rating2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating2" type="radio" value="2" name="rating" />

                        <label class=star for=rating3>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating3" type="radio" value="3" name="rating" />

                        <label class="star" for="rating4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating4" type="radio" value="4" name="rating" />

                        <label class="star" for="rating5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating5" type="radio" value="5" name="rating" />

                        <!-- por último el label del rating 0 ( sin calificar ) -->
                        <label class="reset" for="rating0">reset</label>

                        <div id="texto">sin calificar</div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="../images/elfos/elfo3.jpg" alt="">
                </div>
                <div class="content">
                <form class="clasificacion" id="form7" action="" method="">
                        <h2>Imagen 1</h2>
                        <h5>Deja tu calificación </h5>
                        <!-- svg from https://es.wikipedia.org/wiki/Archivo:Star*.svg -->

                        <input id="rating0" type="radio" value="0" name="rating" checked />
                        <label class="star" for="rating1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15" 
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating1" type="radio" value="1" name="rating" />

                        <label class="star" for="rating2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating2" type="radio" value="2" name="rating" />

                        <label class=star for=rating3>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating3" type="radio" value="3" name="rating" />

                        <label class="star" for="rating4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating4" type="radio" value="4" name="rating" />

                        <label class="star" for="rating5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating5" type="radio" value="5" name="rating" />

                        <!-- por último el label del rating 0 ( sin calificar ) -->
                        <label class="reset" for="rating0">reset</label>

                        <div id="texto">sin calificar</div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="../images/elfos/elfo3.jpg" alt="">
                </div>
                <div class="content">
                <form class="clasificacion" id="form8" action="" method="">
                        <h2>Imagen 1</h2>
                        <h5>Deja tu calificación </h5>
                        <!-- svg from https://es.wikipedia.org/wiki/Archivo:Star*.svg -->

                        <input id="rating0" type="radio" value="0" name="rating" checked />
                        <label class="star" for="rating1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15" 
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating1" type="radio" value="1" name="rating" />

                        <label class="star" for="rating2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating2" type="radio" value="2" name="rating" />

                        <label class=star for=rating3>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating3" type="radio" value="3" name="rating" />

                        <label class="star" for="rating4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating4" type="radio" value="4" name="rating" />

                        <label class="star" for="rating5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
                        <path stroke="#605a00" stroke-width="15"
                        d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
                        </svg>
                        </label>
                        <input id="rating5" type="radio" value="5" name="rating" />

                        <!-- por último el label del rating 0 ( sin calificar ) -->
                        <label class="reset" for="rating0">reset</label>

                        <div id="texto">sin calificar</div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="../js/star.js"></script>
    
</body>
</html>