<?php
$dbip="localhost";
$dbuser="root";
$dbpass="";
$dbname="paso";
$con=mysqli_connect ($dbip, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()){
    echo 'conexion fallida:' , mysqli_connect_error();
    exit();
}
?>