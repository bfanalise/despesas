<?php
$local = "localhost";
$user = "root";
$pass = "";
$dbase = "financas";

$conn = new mysqli($local, $user, $pass, $dbase);

if($conn -> error){
    die("Não foi possível conectar neste endereço." . $conn -> error);
}