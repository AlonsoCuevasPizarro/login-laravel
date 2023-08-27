<?php

    $error;

    if(!empty($_POST['usuario']) && !empty($_POST['password'])){

        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        if($usuario == "Alonso" && $password == "123"){
            $error = "OK";
            //echo "Accedio";
        }
        else{
            $error ="Incorrecto";
            header("Location: index.php?error=$error");
        }
    }
    else{
        $error = "vacio";
        header("Location: index.php?error=$error");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Document</title>
</head>
<body> 

<div class="pagina">
    <br/>
    <h1>Hola, <?php echo $usuario; ?></h1>

    <form action="./index.php" method="GET">
        <h1><button class="btn sucess">Cerrar Sesion</button><h1>
    </form>
</br>

</div>
    
</body>
</html>