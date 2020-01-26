<?php
require_once "Dolares.php";

sleep(2);

$objDolares = new Dolares();


$numero1 = $_POST["txtnumero1"];


if(isset($_POST["btndolarapeso"])){
$objDolares->setNumero1($numero1);
echo $objDolares->dolar();
}
?>