<?php
require_once "Convertir.php";

$objConvertir = new Convertir();

$dolares = $_POST["txtdolares"];

if(isset($_POST["btnconvertir"])){
$objConvertir->setDolares($dolares);
echo $objConvertir->convertir();
}
?>