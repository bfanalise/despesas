<?php
include_once("conexao.php");

if(isset($_POST["enviar"])){
    $dataBaixa = $_POST["dataBaixa"];
    $descricao = $_POST["descricao"];
    $adicionais = $_POST["adicionais"];
    $forma_pagamento = $_POST["forma_pagamento"];
    $competencia = $_POST["mesfaturamento"];
}

if(!$conn){
    die("Houve um erro!" . mysqli_connect_error());
}
$insert = "INSERT INTO despesas VALUES (default,'$dataBaixa','$descricao','$adicionais','$forma_pagamento','$competencia')";

$sql = mysqli_query($conn, $insert);

if($sql){
    header('Location: index.php');
}