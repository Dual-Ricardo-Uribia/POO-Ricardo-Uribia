<?php
require_once("car.php");
require_once("uberX.php");
require_once("uberX.php");
require_once("User.php");
require_once("account.php");

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456", "andres.herrera@gmail.com", "12345"), "Chevrolet", "Spark");
$uberX->printDataUberX();



/*
$payment = new Payment("Payment");
$payment->printDataPayment();

$efectivo = new Efectivo("Efectivo: ", "$50,00");
$efectivo->printDataPayment();

$paypal = new Paypal("PAYPAl", "Dual.Ricardo.Uribia@gmail.com");
$paypal->printDataPayment();

$tarjeta = new Tarjeta("Tarjeta", "XXXXXXXXXXXX5970", "748", "12/23");
$tarjeta->printDataPayment();*/
?>