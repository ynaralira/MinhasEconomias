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
    <h1>Metas e orçamentos</h1>
        <form action="processar_metas_orcamentos.php" method="POST">
            <div class="form-group">
                <label for="meta">Definir Meta:</label>
                <input type="number" id="meta" name="meta" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-add">Definir Meta</button>
        </form>

        <hr>

        <div class="form-group">
            <label for="orcamento">Definir Orçamento Mensal:</label>
            <input type="number" id="orcamento" name="orcamento" class="form-control" required>
        </div>
        <button class="btn btn-add" id="btn-definir-orcamento">Definir Orçamento</button>

        <hr>

        <h3>Progresso da Meta:</h3>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>

<!--Scripts do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
        // Função para definir a porcentagem do progresso da meta
        function setProgress(progress) {
            var progressBar = document.querySelector(".progress-bar");
            progressBar.style.width = progress + "%";
            progressBar.textContent = progress + "%";
        }

        // Evento de clique no botão Definir Orçamento
        var btnDefinirOrcamento = document.getElementById("btn-definir-orcamento");
        btnDefinirOrcamento.addEventListener("click", function () {
            var orcamentoInput = document.getElementById("orcamento");
            var orcamento = parseFloat(orcamentoInput.value);

            if (!isNaN(orcamento)) {
                // Supondo que a meta seja 1000
                var meta = 1000;

                var progress = (orcamento / meta) * 100;
                setProgress(progress);

                orcamentoInput.value = "";
            }
        });
    </script>
</body>
</html>
