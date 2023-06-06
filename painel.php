<?php
session_start();
include('conexao.php');

// Consultar os registros de transações e categorias
//$consulta_transacoes_query = "SELECT * FROM transacoes, categorias";
//$resultado = $mysqli->query($consulta_transacoes_query);

$consulta_transacoes_query = "SELECT * FROM transacoes ORDER BY data_transacao DESC";
$resultado = $mysqli->query($consulta_transacoes_query);

$consulta_transacoes_gasto = "SELECT SUM(valor_gasto) AS total_gasto FROM transacoes";
$resultado_gasto= $mysqli->query($consulta_transacoes_gasto);

$consulta_transacoes_recebido = "SELECT SUM(valor_recebido) AS total_recebido FROM transacoes";
$resultado_recebido= $mysqli->query($consulta_transacoes_recebido);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Controle Financeiro Pessoal</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="./assets//img//logo.jpg" type="image/png">
</head>
<body>
    
<div class="sidebar">
    <nav class="navbar flex-column">
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

            <li class="nav-item">
                <a class="nav-link" href="index.php">Deslogar</a>
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


<div class="content p-5">
    <h1>Controle Financeiro</h1><hr>
    <div class="dashboard">

    <div class="dashboard-card">
    <?php
    if ($resultado_recebido->num_rows > 0) {
        $row = $resultado_recebido->fetch_assoc();
        $total_recebido = $row['total_recebido'];
    } else {
        $total_recebido = 0;
    }
    
    // Exibir o saldo como 0 caso não haja registros
    if ($total_recebido === null) {
        $total_recebido = 0;
    }
    ?>
    <h2>Saldo Atual</h2>
    <p><?php echo "Total: R$ " . $total_recebido; ?></p>
</div>


        <div class="dashboard-card">
        <?php if ($resultado_gasto->num_rows > 0) {
            $row = $resultado_gasto->fetch_assoc();
            $total_gasto = $row['total_gasto'];
            } else {
            $total_gasto = 0;
            }
              // Exibir o saldo como 0 caso não haja registros
    if ($total_gasto === null) {
        $total_gasto = 0;
    }
    ?>
            <h2>Despesas Totais</h2>
            <p><?php  echo "Total: R$ " . $total_gasto; ?></p>
        </div>

        <div class="dashboard-card">
    <?php
    $receitas_totais = $total_recebido - $total_gasto;
    ?>
    <h2>Lucro</h2>
    <p><?php echo "Total: R$ " . $receitas_totais; ?></p>
</div>

<div class="dashboard-card">
    <h2>Metas Financeiras</h2>
    <p><?php echo "Progresso: " . $progresso_metas . "%"; ?></p>
</div>
    </div>

    <hr style="margin:30px">
    <div class="transactions-container">
        <h2>Transações Recentes</h2>
        <?php
// Verificar se a mensagem está definida na sessão
if (isset($_SESSION['mensagem'])) {
    echo '<div class="alert alert-success">' . $_SESSION['mensagem'] . '</div>';

    // Limpar a mensagem da sessão
    unset($_SESSION['mensagem']);
}

if (isset($_SESSION['mensagemDetele'])) {
    $mensagem = $_SESSION['mensagemDetele'];
    $classe = $_SESSION['mensagemDetele'] == "Excluída com sucesso." ? "success" : "error";
    echo '<div class="alert alert-danger">' . $_SESSION['mensagemDetele'] . '</div>';

    // Limpar a mensagem da sessão
    unset($_SESSION['mensagemDetele']);
}
?>

        <div>
        <?php
        // Exibir os registros de transações
        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                $data_transacao = date('d/m/Y', strtotime($row['data_transacao']));
                $descricao = $row['descricao'];
                $valor_gasto = $row['valor_gasto'];
                $nome_categoria = $row['nome_categoria'];
                $valor_recebido = $row['valor_recebido'];
                $tipo = $row['tipo'];
        ?>
        <div class="transaction">
            <p><?php echo $data_transacao; ?></p>
            <p>Receita: <?php echo $valor_recebido; ?></p>
            <p>Despesa: R$ <?php echo $valor_gasto; ?></p>
            <p>Tipo: <?php echo $tipo; ?></p>
            <p>Categoria: <?php echo $nome_categoria; ?></p>
            <p>Descrição: <?php echo $descricao; ?></p>
            <button class="delete-button red-button" onclick="deletarTransacao(<?php echo $row['id']; ?>)">Deletar</button>
        </div>
        <?php
            }
        } else {
            echo "<p>Nenhuma transação encontrada.</p>";
        }
        ?>
    </div>
    
</div>
<script>
    function deletarTransacao(id) {
        if (confirm("Tem certeza de que deseja deletar esta transação?")) {
            // Enviar solicitação AJAX para deletar a transação
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "deletar_transacao.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Atualizar a página após a exclusão da transação
                    location.reload();
                }
            };
            xhr.send("id=" + id);
        }
    }
</script>

<!--Scripts do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

