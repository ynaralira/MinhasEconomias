<?php
session_start();
include('conexao.php');

// Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar se houve algum erro na conexão
    if ($mysqli->connect_errno) {
        echo "Falha ao conectar ao MySQL: " . $mysqli->connect_error;
        exit();
    }

    // Consulta para verificar se o usuário existe
    $query = "SELECT * FROM usuario WHERE username = '$username'";
    $result = $mysqli->query($query);

    // Verificar se a consulta retornou um resultado
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_password = $row['password'];

        // Verificar se a senha digitada coincide com a senha armazenada no banco de dados
        if ($password === $stored_password) {
            // Autenticação bem-sucedida, redirecionar para a página inicial do usuário
            $_SESSION['username'] = $username;
            header("Location: painel.php");
            exit();
        } else {
            // Senha incorreta
            $error = "Senha incorreta";
        }
    } else {
        // Usuário não encontrado
        $error = "Usuário não encontrado";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tela de Login</title>
  <!-- Adicione os links para os arquivos CSS do Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="icon" href="./assets//img//logo.jpg" type="image/png">
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 login-container">
        <h2 class="text-center mb-4">Login</h2>
                <?php
        if (isset($error)) {
        echo "<p id='msg'>$error</p>";
        }
        ?>

         <form method="POST" action="index.php">
          <div class="form-group">
            <label for="username">Nome de usuário</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Digite seu nome de usuário">
          </div>
          <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Adicione os scripts do Bootstrap no final do corpo -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
