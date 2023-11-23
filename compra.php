<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="./styles/compra.css" />
    <link rel="icon" type="image/png" href="./img/favicon-32x32.png" />
    <title>Tu compra</title>
  </head>
  <body>
    <header>
      <nav class="nav">
        <a href="#"><img class="logo" src="./img/logo.png" alt="logo" /></a>

        <ul class="enlaces-menu">
          <li><a href="./inicio.html">Inicio</a></li>
          <li><a href="./recomendaciones.html">Recomendaciones</a></li>
          <li><a href="./tienda.html">Tienda</a></li>
          <li><a href="./soporte.html">Soporte</a></li>
        </ul>

        <button class="ham" type="button">
          <span class="br-1"></span>
          <span class="br-2"></span>
          <span class="br-3"></span>
        </button>
      </nav>
    </header>
    <main>
      <div class="contenido">
        <div class="cont-form">
          <form action="" method="POST" class="formulario">
            <?php
            include("conexion.php");
            include("control_registro.php");
            ?>
            <label for="nombre"
              >Nombre completo<input
                id="nombre"
                name="nombre"
                type="text"
                placeholder="Ingresa tu nombre completo"
                
            /></label>
            <label for="email"
              >Correo<input
                id="email"
                name="email"
                type="email"
                placeholder="Ingresa tu correo"
                
            /></label>
            <label for="direccion"
              >Dirección<input
                id="direccion"
                name="direccion"
                type="direccion"
                placeholder="Ingresa tu dirección"
                
            /></label>
            <label for="telefono"
              >Teléfono<input
                id="telefono"
                name="telefono"
                type="telefono"
                placeholder="Ingresa tu telefono de contacto"
                
            /></label>
            <label for="documento"
              >Número de documento<input
                id="documento"
                name="documento"
                type="documento"
                placeholder="Ingresa tu número de documento"
                
            /></label>
            <input class="button" type="submit" value="Registrarme" name="registro">
            <p class="warning">Registrarse antes de pagar</p>
          </form>
        </div>

        <div class="resumen">
          <h2>Resumen del pedido</h2>
          <div class="descripcion-producto">
            <img src="./img/ProductoMata.jpg" alt="Jardinero arbusto" />
            <h3>Nombre del producto</h3>
            <p>Jardinero arbusto</p>
            <h3>Precio</h3>
            <p class="precio">$130.000</p>
            <h3>Descripción</h3>
            <p>Sensor de humedad y temperatura con forma de arbusto.</p>
          </div>
        </div>
      </div>
      <a href="https://pay.sumup.com/b2c/XXEYBZIFVB"><button name="pagar">Pagar</button></a>
      <a href="./tiendaProduct.html"><button name="volver">Volver</button></a>
    </main>
    <footer>
      <nav class="footer-nav">
        <h4>WEBSITE LINKS</h4>
        <ul class="nav_f">
          <li class="Footer-nav__item">
            <a href="./inicio.html"> Inicio </a>
          </li>
          <li class="Footer-nav__item">
            <a href="./recomendaciones.html"> Recomendaciones </a>
          </li>
          <li class="Footer-nav__item">
            <a href="./tienda.html"> Tienda </a>
          </li>
          <li class="Footer-nav__item">
            <a href="./soporte.html"> Soporte </a>
          </li>
        </ul>
      </nav>

      <figure class="footer-obj">
        <img src="./img/Logofooter.png" alt="logo" />
      </figure>

      <aside class="footer-contacto">
        <a href="https://wa.me/573194972886" target="_blank " rel="noopener"
          ><img src="./img/whatsapp.png" alt="logo whatsapp"
        /></a>
        <a href="https://wa.me/573194972886" target="_blank " rel="noopener"
          >Whatsapp</a
        >

        <a
          href="https://maps.app.goo.gl/bL21gFBnBovazLk16"
          target="_blank "
          rel="noopener"
          ><img src="./img/ubicacion.png" alt="logo mapa"
        /></a>
        <a
          href="https://maps.app.goo.gl/bL21gFBnBovazLk16"
          target="_blank "
          rel="noopener"
          >Bogota, Colombia</a
        >

        <a href="mailto:pachon.paula1@gmail.com" target="_blank " rel="noopener"
          ><img src="./img/mail.png" alt="Correo"
        /></a>
        <a href="mailto:pachon.paula1@gmail.com" target="_blank " rel="noopener"
          >soporte.greensense@gmail.com</a
        >
      </aside>
    </footer>
    <script src="./js/index.js"></script>
  </body>
</html>
