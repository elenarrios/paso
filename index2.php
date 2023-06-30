<?php
require "php/conexion.php";
$m=$_GET['mesa'];
$c=$_GET['contraseña'];
$q= "SELECT * from mesas, fiscales where mesas.id_fiscales=fiscales.fiscales.id_fiscal and id_mesa=$m and contraseña $c"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row --bs primary m-3 p-2"></div>
        <div class="col bg-subtle text primary text-center"></div>
        <?php echo ("<h1> Mesa N° $m </h1>") ?>
    </div>
    <div class="container">
        <?php
        $q="SELECT * from listas";
        $r=mysqli_query($con, $q);
        while($valores=mysqli_fetch_array($r)){
            echo('<label>' . $valores['candidato'] . '<input name=L' . $valores['id_lista'] . '></input>');
        }
        ?>
    </div>
</body>
</html>