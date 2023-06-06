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
    <h1>Relatórios</h1>
    <hr>
<h5>Funcionalidades principais:</h5>

<p>Autenticação de usuário: Permita que os usuários criem uma conta e façam login no sistema. As informações do usuário devem ser armazenadas no banco de dados MySQL, incluindo nome, endereço de e-mail e senha criptografada.</p>

<p>Painel de controle: Após fazer login, os usuários serão direcionados para um painel de controle onde poderão ver um resumo de suas finanças, incluindo saldo atual, gráficos de receitas e despesas, e um histórico de transações recentes.</p>

<p>Registro de transações: Os usuários poderão registrar suas receitas e despesas. Eles deverão informar a categoria da transação (ex.: alimentação, transporte, lazer), a data, o valor e uma descrição opcional. Essas informações serão armazenadas no banco de dados.</p>

<p>Categorias e tags: Permita que os usuários criem categorias personalizadas para classificar suas transações. Isso facilitará a análise e o acompanhamento de gastos em diferentes áreas da vida financeira. Além disso, permita que os usuários adicionem tags às transações para melhor organização e pesquisa.</p>

<p>Relatórios e gráficos: Forneça aos usuários relatórios detalhados e gráficos visuais para que possam analisar suas receitas e despesas. Exiba resumos mensais, gráficos de pizza ou barras para categorias de gastos, e permita que os usuários comparem seus gastos ao longo do tempo.</p>

<p>Metas e orçamentos: Dê aos usuários a opção de definir metas financeiras e orçamentos mensais. Isso permitirá que eles estabeleçam limites de gastos para cada categoria e acompanhem seu progresso em relação às metas estabelecidas.</p>

<p>Exportação de dados: Permita que os usuários exportem seus dados financeiros para formatos comuns, como CSV ou PDF. Isso possibilitará que eles importem suas informações em outras ferramentas ou compartilhem com profissionais de contabilidade, se necessário.</p>

</div>

<!--Scripts do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
