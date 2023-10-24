<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="description" content="AppMedia es una empresa digital especializada en Sistemas e Innovaciones">
    <meta name="keywords" content="Redes,Sociales, Android Studio, Bootstrap, Angular, HTML5, CSS3, JavaScript">
    <meta NAME="Title" CONTENT="APPMEDIA"/>
    <meta NAME="Author" CONTENT="Jorge Antonio Luque Chambi"/>
    <meta NAME="Language" CONTENT="Spanish"/>
    <meta NAME="Revisit" CONTENT="1 day"/>
    <meta NAME="Distribution" CONTENT="Global"/>
    <meta NAME="Robots" CONTENT="All"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/nuevousuario.css">
    <link rel="stylesheet" href="css/iniciar.css">
</head>
<body>
<header>
        <div class="contenedor">
            <img src="img/main.png">
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="index.html">Inicio</a>
                <a href="#servicios">Servicios</a>
                <a href="#marketing">Marketing Digital</a>
                <a href="#contacto">Contacto</a>
            </nav>
        </div>
    </header>
    <section class="inicio">
        <h1>CREAR NUEVO USUARIO</h1>
        <div class="info-pet">
            <form action="registro.php" method="POST"></form>
			<input type="text" name="nombre" placeholder="Ingrese sus nombres" class="contacto"><br><br>
            <input type="text" name="apellido" placeholder="Ingrese sus apellidos" class="contacto"><br><br>
			<input type="email" name="correo" class="contacto" placeholder="Ingrese su correo"><br><br>
            <input type="age" name="edad" class="contacto" placeholder="Ingrese su edad"><br><br>
            <a href="panel.php" class="ingresa">Crear Sesion</a>
            <a href="iniciar.php" class="registro">Iniciar sesion</a>
            <a href="index.html">Regresar</a> 
        </div>
    </section>
    <hr>
    <footer>
        <div class="contenedor">
            <p class="copy">
                My AppMedia &copy; 2023
            </p>
            <div class="sociales">
                <a class="icon-facebook" href="http://www.facebook.com"></a>
                <a class="icon-twitter" href="#"></a>
                <a class="icon-instagram" href="#"></a>
            </div>
        </div>
    </footer>
    
    
</body>
</html>