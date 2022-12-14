<?php

include_once __DIR__ . '\View\generales.php';
include_once __DIR__ . '\Controller\UsuarioController.php';

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0"
    />
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="main.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/estilos.css" />
  </head>
  <body>

  <a href="View\home.php"></a>
    <div class="main">
      <div class="container a-container" id="a-container">


        <form class="form" id="a-form" method="POST" action="">

          <h2 class="form_title title">Crear Cuenta</h2>
          <div class="form__icons"></div>
          <span class="form__span">Utilice su correo electronico</span>
          <input class="form__input" type="text" name="nombre" placeholder="Nombre" required />
          <input class="form__input" type="text" name="apellido" placeholder="Apellido" required/>
          <input class="form__input" type="text" name="correo" placeholder="Correo" required/>
          <input class="form__input" type="password" name="contrasenna" placeholder="Contraseña" required/>
          <input type="submit" id="btnRegistrarse" name="btnRegistrarse" value="Registrarse" class="form__button button">
        </form>

      </div>
      <div class="container b-container" id="b-container">

        <form class="form" id="b-form" role="form" method="post" action="">
          
          <h2 class="form_title title">Iniciar Sesion</h2>
          <div class="form__icons"></div>
          <span class="form__span">Utilize su correo electronico</span>
          <input class="form__input" type="text" placeholder="Correo" id="txtCorreo" name="txtCorreo"/>
          <input class="form__input" type="password" placeholder="Contraseña" id="txtContrasenna" name="txtContrasenna" />

          <a class="form__link">Olvidaste la contraseña?</a>
          <input type="submit" id="btnIniciarSesion" name="btnIniciarSesion" value="iniciar sesion" class="form__button button">
          
        </form>
      </div>
      <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
          <h2 class="switch__title title">¡ Bienvenido  !</h2>
          <p class="switch__description description">
            Para mantenerte conectado con nosotros porfavor ingresa con tu informacion personal
          </p>
          <button class="switch__button button switch-btn">Iniciar Sesion</button>
        </div>
        <div class="switch__container is-hidden" id="switch-c2">
          <h2 class="switch__title title">Hola Amigo !</h2>
          <p class="switch__description description">
            Ingresa tu informacion personal y disfruta de nuestros servicios
          </p>
          <button class="switch__button button switch-btn">Registrarse</button>
        </div>
      </div>
    </div>
    <script src="js/inicio.js"></script>
  </body>
</html>
