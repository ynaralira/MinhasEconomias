<?php
session_start();
include('conexao.php');

// Verificar se os campos foram preenchidos
if (isset($_POST['nome_categoria'], $_POST['valor_gasto'], $_POST['descricao'], $_POST['data_transacao'], $_POST['tipo'], $_POST['valor_recebido'])) {
    $nome_categoria = $_POST['nome_categoria'];
    $tipo = $_POST['tipo'];
    $valor_gasto = $_POST['valor_gasto'];
    $valor_recebido = $_POST['valor_recebido'];
    $descricao = $_POST['descricao'];
    $data_transacao = $_POST['data_transacao'];
    // Verificar se os campos não estão vazios
    if (!empty($nome_categoria) && !empty($valor_gasto) && !empty($descricao) && !empty($data_transacao)) {

        // Inserir na tabela categorias
        $insert_transacoes_query = "INSERT INTO transacoes (descricao, valor_gasto, valor_recebido, data_transacao, nome_categoria, tipo)
         VALUES ('$descricao', '$valor_gasto', $valor_recebido, '$data_transacao','$nome_categoria', '$tipo')";
        $mysqli->query($insert_transacoes_query);

    // Definir mensagem de sucesso
    $_SESSION['mensagem'] = "Transação registrada com sucesso.";

        // Redirecionar para a página de sucesso
        header('Location: painel.php');
        exit();
    } else {
        // Um ou mais campos estão vazios
        echo "Preencha todos os campos obrigatórios.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Controle Financeiro Pessoal</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css">
    <link rel="icon" href="./assets//img//logo.jpg" type="image/png">
</head>
<body>
    
<div class="sidebar">
    <nav class="navbar flex-column ">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="painel.php"><i class="fi fi-rs-chart-histogram"></i> Painel de controle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registros_transacoes.php"><i class="fi fi-rs-chart-line-up"></i> Registro de transações</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="categorias_tags.php"><i class="fi fi-rr-hand-holding-usd"></i> Categorias e tags</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="relatorios.php"><i class="fi fi-rs-money-check"></i> Relatórios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="metas_orcamentos.php"><i class="fi fi-rs-chart-user"></i> Metas e orçamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="exportacao_dados.php"><i class="fi fi-rr-cube"></i> Exportação de dados</a>
            </li>
        </ul>
    </nav>
</div>
<div class="col-md-15" id="navbar">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
                <a class="navbar-brand" href="#"><i class="fi fi-br-menu-burger"></i></a>
                <h1 class="navbar-brand mb-0">Minhas Economias</h1>
            </nav>
        </div>
    </div>
</div>
<div class="content">
    <div class="form-container">
 
        <h1>Registrar nova transação</h1>
      
        <form method="POST" action="registros_transacoes.php">
        <div class="form-group">
                <label for="nome_categoria">Categoria:</label>
                <input type="text" id="nome_categoria" name="nome_categoria" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="data_transacao">Data:</label>
                <input type="date" id="data_transacao" name="data_transacao" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" id="tipo" name="tipo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="valor_recebido">Valor recebido:</label>
                <input type="number" id="valor_recebido" name="valor_recebido" class="form-control" required>
            </div>
            <hr>
            <div class="form-group">
                <label for="valor_gasto">Valor gasto:</label>
                <input type="number" id="valor_gasto" name="valor_gasto" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-submit">Registrar</button>
        </form>
    </div>
</div>

<!--Scripts do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
