<?php

$host="sitioo.mysql.database.azure.com";
$bd="sitio";
$usuario="Sitio@sitioo";
$contraseña="Tato2407@";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contraseña);

} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>
