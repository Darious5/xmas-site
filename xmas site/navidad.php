<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css"/>
    <title>Document</title>
</head>
<body>
    <?php
        function mostrar_notificacion(){
            $switch="false";
            if (isset($_COOKIE["notificacion_vista"])) $switch="true";
            return $switch;
        }
        if (mostrar_notificacion()=="false"){
            echo   "<p>Bienvenido a nuestro sitio web!</p>
                    <p>Recuerda que el examen de implantacion de aplicaciones web es el 4 de dicciembre</p>";
            setcookie("notificacion_vista", "true", time() + 86400 * 30, "/");
        }
    ?>
    <h1>Feliz Navidad!</h1>
    <h2>Sobre la Navidad</h2>
    <p>La Navidad es una epoca festiva que se celebra en todo el mundo para conmemorar el nacimiento de Jesucristo</p>
    <p>Es un momento especial lleno de alegria, regalos y reuniones familiares, decoraciones festivas y tradiciones unicas.</p>
</body>
</html>