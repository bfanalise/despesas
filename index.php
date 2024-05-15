<?php
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Estoque</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="global">
            <nav>Home | Relatório | Dashboard</nav>
        <!------------LADO DIREITO DA TELA------------>
        <section>
            <header>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5"/>
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                </svg> Nova despesa<br>
                <p><a href="#">Página inicial</a> / Cadastro de despesas</p>
            </header>
            <form method="POST" action="insert.php">
                <div class="topo_formulario">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ui-radios" viewBox="0 0 16 16">
                <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM0 12a3 3 0 1 1 6 0 3 3 0 0 1-6 0m7-1.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5M3 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6m0 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
                </svg> Dados da nova despesa
                </div>
                <table>
                    <tr>
                        <th>Data</th>
                    </tr>
                    <tr>
                        <td><input type="date" name="dataBaixa"></td>
                    </tr>
                    <tr>
                    <th>Descrição da despesa</th>
                    </tr>
                        <td><input type="text" placeholder="Descrição da despesa" name="descricao"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th>Observação</th>
                    </tr>
                    <tr>
                        <td>
                        <textarea placeholder="Informações importantes" name="adicionais"></textarea>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th>Forma de pagamento</th>
                        <th>Valor:</th>
                    </tr>
                    <tr>
                    <td><input type="text" name="forma_pagamento"></td>
                    <td><input type="number" min="0" max="100" step=".01" name="valor"></td>
                    </tr>
                    <tr>
                        <th>Mês Faturamento</th>
                    </tr>
                    <tr>
                    <td><input type="text" placeholder="Competência" name="mesfaturamento"></td>
                    <td><input type="submit" value="Enviar" name=enviar></td>
                    </tr>
                </table>
            </form>
        </section>
    </div>
</body>
</html>