<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Microemprendimiento</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="principal">
    <header class="header">
        <a href="index.php">
            <img class="header__logo" src="img\logo 1.png" alt="Logotipo">
        </a>
    </header>
    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="#quehacemos">Que hacemos</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="#nosotros">Nosotros</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="#producto">Productos</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="#contacto">Contactanos</a>
    </nav>
    <section class="Conocenos">
        <h1 class="slogan">Conecta con tu Oasis</h1>
        <div class="botones">
            <a class="conocenos--a" href="#contacto">Contáctanos</a>
            <a class="conocenos--a" href="#nosotros">Nosotros</a>
        </div>
    </section>
</main>

<br><br><br><br><br><br><br><br><br><br><br><br>

<main class="nosotros" id="quehacemos">
    <div class="nosotros__texto">
        <h1>Fuentes de Maderas</h1>
        <p>Somos la empresa MAFU, un microemprendimiento dedicado a la creación de fuentes de madera únicas. Utilizamos troncos de árboles seleccionados para fabricar fuentes que combinan funcionalidad y estética natural. Cada pieza es elaborada con cuidado y detalle para ofrecer productos que embellecen y aportan un toque de serenidad a cualquier espacio. Nuestro compromiso con la calidad y el diseño se refleja en cada fuente que producimos, asegurando que cada una sea una obra de arte en sí misma.</p>
        <p class="publicidad" >!!! Seguinos en nuestras redes <a href="https://www.instagram.com/empresa_mafu.ok/">Click Aqui!!</a></p>
    </div>
    <div class="nosotros__imagen">
        <img src="imagen/estructura.jpeg" alt="Fuente de madera">
    </div>
</main>

<br><br><br><br><br><br><br>
<main class="equipo" id="nosotros">
    <h2>Conoce al Equipo</h2>
    <div class="equipo__contenedor">
        <div class="equipo__miembro">
            <img src="imagen/team1.jpg" alt="Miembro 1">
            <div class="equipo__info">
                <h3>Facundo Jose Esteche</h3>
                <p>Producción</p>
                <div class="equipo__instagram">
                    <a href="https://www.instagram.com/facu_esteche05/" target="_blank">
                        <img src="imagen/instagram.png" alt="Instagram Logo" class="instagram-logo">
                    </a>
                </div>
            </div>
        </div>
        <div class="equipo__miembro">
            <img src="imagen/team2.jpg" alt="Miembro 2">
            <div class="equipo__info">
                <h3>Tavarez Darien</h3>
                <p>Marketing</p>
                <div class="equipo__instagram">
                    <a href="https://www.instagram.com/darientavarezz/" target="_blank">
                        <img src="imagen/instagram.png" alt="Instagram Logo" class="instagram-logo">
                    </a>
                </div>
            </div>
        </div>
        <div class="equipo__miembro">
            <img src="imagen/team3.jpg" alt="Miembro 3">
            <div class="equipo__info">
                <h3>Yohana Marisol Hartmann</h3>
                <p>Comercialización</p>
                <div class="equipo__instagram">
                    <a href="https://www.instagram.com/solsi.hy/" target="_blank">
                        <img src="imagen/instagram.png" alt="Instagram Logo" class="instagram-logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>


<br><br><br><br><br><br><br><br><br>

<main class="contenedor" id="producto">
    <h1>Nuestros Productos</h1>
    <div class="grid">
        <div class="producto">
            <a href="producto.html?id=1">
                <img class="producto__imagen" src="imagen/1.jpg" alt="imagen producto 1">
                <div class="producto__informacion">
                    <p class="producto__nombre">3 pinos</p>
                    <p class="producto__precio">$20</p>
                </div>
            </a>
        </div>

        <div class="producto">
            <a href="producto.html?id=2">
                <img class="producto__imagen" src="imagen/3.jpg" alt="imagen producto 2">
                <div class="producto__informacion">
                    <p class="producto__nombre">Cascada del Bosque</p>
                    <p class="producto__precio">$23</p>
                </div>
            </a>
        </div>
        <div class="producto">
            <a href="producto.html?id=3">
                <img class="producto__imagen" src="imagen/2.jpg" alt="imagen producto 2">
                <div class="producto__informacion">
                    <p class="producto__nombre">Tronco de Sueños</p>
                    <p class="producto__precio">$18</p>
                </div>
            </a>
        </div>
        <div class="producto">
            <a href="producto.html?id=4">
                <img class="producto__imagen" src="imagen/4.jpg" alt="imagen producto 2">
                <div class="producto__informacion">
                    <p class="producto__nombre">Armonía de Raíces</p>
                    <p class="producto__precio">$23</p>
                </div>
            </a>
        </div>
    </div>
</main>

<br><br><br><br>

<main id="contacto">
    <section class="contacto-contenido">
         <!-- Información adicional de contacto con íconos -->
         <div class="contacto-info">
            <h3>Información de Contacto</h3>
            <p><i class="fas fa-phone-alt"></i>3764 145766</p>
            <p><i class="fab fa-instagram"></i> <a href="https://www.instagram.com/empresa_mafu.ok/" target="_blank">empresa_mafu.ok</a></p>
            <p><i class="fas fa-envelope"></i>empresamafu@gmail.com</p>
        </div>
        <!-- Formulario de contacto -->
        <form action="procesar_contacto.php" method="POST">
    <div id="contacto" class="form-register">
        <h2>Contacto</h2>
        <input class="controls" type="text" name="nombre" placeholder="Ingrese su Nombre" required>    
        <input class="controls" type="tel" name="telefono" placeholder="Ingrese su Teléfono">    
        <input class="controls" type="email" name="email" placeholder="Ingrese su Email" required>    
        <textarea class="controls" name="mensaje" cols="20" rows="5" placeholder="Ingrese Mensaje" required></textarea>     
        <input type="submit" value="Enviar" class="botons">
    </div>
</form>


    </section>
        <!-- Alerta de confirmación -->
        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div class="alerta-exito">
            <p>¡Mensaje enviado exitosamente!</p>
        </div>
    <?php endif; ?>
    
</main>

<footer class="footer">
    <p class="footer__texto">Tienda Microemprendimiento - Todos los derechos Reservados 2024.</p>
</footer>

    
</body>
</html>