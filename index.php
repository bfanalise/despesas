<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Despesas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="global">
        <header>
            <div class="logotipo"></div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Relatório</a></li>
                    <li><a href="#">Dashboard</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <div class="form-container">
                <h2>Nova Despesa</h2>
                <form method="POST" action="insert.php">
                    <div class="form-group">
                        <label for="dataBaixa">Data:</label>
                        <input type="date" id="dataBaixa" name="dataBaixa">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição:</label>
                        <input type="text" id="descricao" name="descricao" placeholder="Descrição da despesa">
                    </div>
                    <div class="form-group">
                        <label for="adicionais">Observação:</label>
                        <textarea id="adicionais" name="adicionais" placeholder="Informações importantes"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="formaPagamento">Forma de Pagamento:</label>
                        <input type="text" id="formaPagamento" name="formaPagamento">
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor:</label>
                        <input type="number" id="valor" name="valor" min="0" max="100" step=".01">
                    </div>
                    <div class="form-group">
                        <label for="mesFaturamento">Mês Faturamento:</label>
                        <input type="text" id="mesFaturamento" name="mesFaturamento" placeholder="Competência">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Enviar" name="enviar">
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>
</html>

