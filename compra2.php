<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <link rel="stylesheet" href="./styles/compra.css" /> -->
    <link rel="icon" type="image/png" href="./img/favicon-32x32.png" />
    <title>Tu compra</title>
    <style>
      * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  
  body {
    background-color: #dee5dc;
    justify-content: center;
    align-items: center;
    color: #1d3218;
  }
  
  /* HEADER */
  .logo {
    width: 130px;
  }
  .nav {
    display: flex;
    align-items: center;
    justify-content: space-around;
    min-height: 15vh;
    background-color: #6c9c5b;
  }
  .ham {
    display: none;
    background-color: transparent;
    cursor: pointer;
    border: none;
    margin: 0;
    padding: 0;
  }
  .ham span {
    background-color: #f3f3f3;
    display: block;
    height: 3px;
    width: 28px;
    margin: 10px auto;
    border-radius: 2px;
  }
  .enlaces-menu {
    display: flex;
    padding: 0;
  }
  .enlaces-menu li {
    padding: 0 40px;
    list-style-type: none;
    transition: 0.3s;
  }
  .enlaces-menu li a {
    text-decoration: none;
    font-size: 1.5rem;
    color: #f3f3f3;
    font-weight: 600;
  }
  .enlaces-menu li:nth-child(3) {
    background-color: #4b6b3f;
  }
  .enlaces-menu li:hover {
    background-color: #4b6b3f;
  }
  
  /* DISPOSITIVOS MOVILES */
  @media (max-width: 768px) {
    body {
      overflow: auto;
    }
    .ham {
      display: block;
      cursor: pointer;
      position: absolute;
      top: 20px;
      right: 25px;
      transition: 0.2s 0.1s;
    }
    .logo {
      margin-left: 25px;
    }
    .nav {
      flex-direction: column;
      align-items: flex-start;
      padding-top: 5px;
      padding-bottom: 5px;
    }
    .enlaces-menu li:nth-child(3) {
      background-color: #4b6b3f;
    }
    .enlaces-menu {
      overflow: hidden;
      flex-direction: column;
      justify-content: space-around;
      align-items: center;
      height: 92vh;
      margin: 0;
      padding: 0;
      display: none;
      opacity: 0;
      transition: opacity 5s ease-out;
      width: 100%;
    }
    .enlaces-menu li {
      text-align: center;
      width: 100%;
      padding: 20px;
    }
  }
  
  /* Animaciones */
  @keyframes muestraMenu {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }
  .enlaces-menu.activado {
    display: flex;
    animation: muestraMenu 350ms ease-in-out both;
  }
  .br-1.animado {
    transform: rotate(-45deg) translate(-10px, 8px);
  }
  .br-2.animado {
    opacity: 0;
  }
  .br-3.animado {
    transform: rotate(45deg) translate(-10px, -8px);
  }
  .ham.girar:hover {
    transform: rotate(360deg);
  }
  
  /* MAIN */
  
.contenido{
  display: flex;
  justify-content: center;
  margin-top: 30px;
}

form, .resumen{
  max-width: 500px;
  min-width: 300px;
  margin: 0 1em 0 ;
  padding: 0.5em 1.5em 1em 1.5em;
}

.resumen {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column; 
}

.resumen img {
  margin: 0 auto; 
  display: block;
  width: 200px;
}

label {
  display: block;
  margin: 0.5rem 0;
  color: #1d3218;
}

p, h2, h3{
  margin-bottom: 0.5em;
  color:#1d3218;
}

.warning{
  text-align: center;
  color: #4d8b36;
  font-weight:bold;
}

input,
select {
  margin: 10px 0 0 0;
  width: 100%;
  min-height: 2em;
  border-radius: 5px;
  border: solid 1px #1d3218;
}

h2{
  text-align: center;
}

.cont-form, .resumen{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background-color: white;
}

.button,
button[name="volver"],button[name="pagar"] {
  display: block;
  margin: 20px auto;
  padding: 10px 20px;
  background-color: #3f5f34;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius: 20px;
}

a{
    text-decoration: none;
}


.button:hover,
button[name="volver"],button[name="pagar"]:hover {
  background-color: #06460f;
}  

button[name="volver"] {
  width: 100px;
}
button[name="pagar"] {
  width: 150px;
}

.alerta{
  text-align: center;
  color: red;
}

.success{
  text-align: center;
  color: green;
}

@media (max-width: 768px){
  .contenido{
    flex-direction:column;
    justify-content: center;
  align-items: center;  
}
  form, .resumen{
  max-width: 200px;
  min-width: 300px;
  margin: 2em 1em 0 ;
}
.cont-form{
  max-width: 200px;
  min-width: 300px;
  margin: 2em 1em 0 ;
  display:flex;
  flex-direction:column;
    justify-content: center;
  align-items: center; 
}
input,
select {
  margin: 10px 0 5px 0;
  width: 100%;
  min-height: 2em;
  border-radius: 5px;
  border: solid 1px #1d3218;
}
label {
  display: block;
  margin: 0;
  color: #1d3218;
}

}

  /* fOOTER */
  footer {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin: 30px 0 0 0;
    background-color: #f6f9f5;
    justify-content: space-between;
  }
  
  .footer-nav {
    margin: auto 40px;
    color: #273f21;
  }
  
  .nav_f {
    margin-top: 10px;
    list-style: none;
  }
  
  .Footer-nav__item a {
    color: #273f21;
    text-decoration: none;
  }
  
  .Footer-nav__item a:hover {
    color: #649752;
  }
  
  .footer-obj {
    margin-top: auto auto;
    padding: 20px 20px;
    justify-content: center;
  }
  
  .footer-obj {
    margin: auto auto;
    padding: 20px 20px;
    justify-content: center;
  }
  
  .footer-obj img {
    width: 150px;
  }
  
  .footer-contacto {
    display: flex;
    margin: auto 40px;
    padding: 10px;
    flex-direction: column;
    align-items: center;
  }
  .footer-contacto a {
    color: #273f21;
    text-decoration: none;
    text-decoration: none;
  }
  
  .footer-contacto img {
    width: 20px;
  }
  
  @media (max-width: 858px) {
    footer {
      align-items: center; 
      flex-direction: column;
    }
    .footer-nav{
      margin-top: 20px;
    }
    .footer-nav,
    .footer-obj,
    .footer-contacto {
      text-align: center;
    }
  
    .footer-nav h4,
    .footer-obj h4 {
      font-size: 15px;
    }
  
    .nav_f li {
      margin: 5px 0;
    }
  
    .footer-contacto img
     {
      width: 20px;
    }
  
  .footer-obj img{
    width: 100px;
  }
  
    .footer-contacto a,
    .Footer-nav__item a {
      font-size: 14px;
    }
  }
  
    </style>
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
            <img src="./img/ProductoConejo.jpg" alt="Jardinero arbusto" />
            <h3>Nombre del producto</h3>
            <p>Jardinero conejo</p>
            <h3>Precio</h3>
            <p class="precio">$140.000</p>
            <h3>Descripción</h3>
            <p>Sensor de humedad y temperatura con forma de conejo.</p>
          </div>
        </div>
      </div>
      <a href="https://pay.sumup.com/b2c/XBIF1JZ1GR"><button name="pagar">Pagar</button></a>
      <a href="./tiendaProduct2.html"><button name="volver">Volver</button></a>
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
