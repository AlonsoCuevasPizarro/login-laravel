<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Document</title>
</head>
<body>


<div class="login">
    <br/>
    <h1>Iniciar Sesion</h1>

    <form action="procesar.php" method="POST">

        <input placeholder="Nombre" type="text" name="usuario"></P>
        <input placeholder="Contraseña" type="text" name="password"></P>

        <?php 
            if(isset($_GET['error'])){

                $error = $_GET['error'];
    
                if($error == "Incorrecto"){
                    echo "<h2>Credenciales Incorrectas</h2>";
                }
                if($error == "vacio"){
                    echo "<h2>Datos vacios</h2>";
                }
            }
        ?>

        <h1><button class="btn sucess">ACCEDER</button><h1>
        <br/>
    </form>
<div>

</body>
</html>