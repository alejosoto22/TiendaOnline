<?php
define("CLIENT_ID", "AZMpIu_oR-911FAicdNUOJC6BtpkIaYCwGeLEj9fO6zfMPzcl6nmbqYMeQIi7-e6ho72HD_sX7lFiKo6");
define("CURRENCY", "USD");
define("KEY_TOKEN", "Kaleheny22");
define("MONEDA", "$");

session_start();

$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count($_SESSION['carrito']['productos']);
}

?>