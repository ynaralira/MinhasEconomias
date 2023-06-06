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
<div class="content ">
    <div class="form-container">
        <h1>Exportação de Dados</h1>
        <form action="processar_exportacao_dados.php" method="POST">
            <div class="form-group">
                <label for="formato">Formato de Exportação:</label>
                <select id="formato" name="formato" class="form-control" required>
                    <option value="csv">CSV</option>
                    <option value="pdf">PDF</option>
                </select>
            </div>
            <button type="submit" class="btn btn-export">Exportar Dados</button>
        </form>
    </div>

</div>

<!--Scripts do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
