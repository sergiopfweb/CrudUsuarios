<?php

    include_once '../includes/init.php';

    $token = createToken();
	$_SESSION['token'] = $token;

    // echo 'Mi token es: ' . $token;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/snackbar.css">
    <script src="../js/function.js"></script>
    <title>Administrator</title>
</head>
<body>
    <nav class="nav">
            <div class="nav__container">
                <!-- <h1 class="nav__logo">Sergio</h1> -->
                <p>Administrador</p>
                <label for="menu" class="nav__label">
                    <img src="../images/menu.svg" alt="" class="nav__img">
                </label>
                <input type="checkbox" id="menu" class="nav__input">

                <div class="nav__menu">
                    <a href="../index.php" class="nav__item">Inicio</a>
                    <a href="../includes/cerrar_sesion.php" class="nav__item">Log out</a>
                </div>
            </div>
    </nav>
    <img class="header" src="../images/cabecera.jpg" alt="">
    <h1 class="titulo">Bienvenido Administrador!</h1>
    <h5 class="titulo">Control de Usuarios</h5>
    <div class="container">
        <?php $users = Usuario::getUsers(); ?>
        <table class="table table-striped table-dark table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <?php foreach ($users as $user) : ?>
                <tr id="row-<?= $user->getId() ?>">
                    <td id="id-<?= $user->getId(); ?>">
                        <?= $user->getId(); ?>
                    </td>
                    <td id="name-<?= $user->getId(); ?>">
                        <?= $user->getName(); ?>
                    </td>
                    <td id="email-<?= $user->getId(); ?>">
                        <?= $user->getEmail(); ?>
                    </td>
                    <td id="usuario-<?= $user->getId(); ?>">
                        <?= $user->getUser(); ?>
                    </td>
                    <td id="id_rol-<?= $user->getId(); ?>">
                        <?= $user->getRol(); ?>
                    </td>
                    <td id="actions-<?= $user->getId(); ?>">
                        <button id="view-btn-<?= $user->getId(); ?>"
                            data-id="<?= $user->getId(); ?>"
                            data-name="<?= $user->getName(); ?>"
                            data-email="<?= $user->getEmail(); ?>"
                            data-usuario="<?= $user->getUser(); ?>"
                            class="btn btn-primary">
                            Seleccionar
                        </button>
                        <button id="delete-btn-<?= $user->getId(); ?>"
                            class="delete-btn" data-id="<?= $user->getId(); ?>"
                        >
                            Borrar
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
        <!-- Modal Update -->
    <div id="update-modal" class="modal">
        <div class="modal-content">
            <span id="update-close-modal" class="close">&times;</span>
            <form name="updateForm" id="updateForm">
                <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                <br/>
                <input type="text" id="name" name="name" class="form-control"
                value=""/>
                <br/>
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <br/>
                <input type="email" id="email" name="email" class="form-control"
                value=""/>
                <br/>
                <label for="usuario" class="col-sm-2 col-form-label">Usuario:</label>
                <br/>
                <input type="text" id="usuario" name="usuario" class="form-control"
                value=""/>
                <br/>
                <input type="hidden" name="id"  value="" />
                <input type="hidden" name="id_rol"  value="" />
                <input type="hidden" name="token"  value="<?= $token ?>" />
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>    
    <!-- Modal Delete -->
    <div id="delete-modal" class="modal">
		<div class="modal-content">
			<span id="delete-close-modal" class="close" title="Cerrar">&times;</span>
			<h2>Borrar usuario</h2>
            <div class="container_delete">
                <form name="deleteForm" id="deleteForm">
					<p>¿Estas seguro de que quieres borrar el usuario?</p>
					<input type="hidden" name="id" value="" />
					<input type="hidden" name="token"  value="<?= $token ?>" />
					<div>
						<button type="button" id="delete-cancel-modal">Cancelar</button>
						<button type="submit" class="delete-btn">Borrar</button>
					</div>
                </form>
            </div>
		</div>
	</div>                  

    <div id="snackbar"></div>

    
</body>
</html>