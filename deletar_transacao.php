<?php
session_start();
include('conexao.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Executar a consulta para excluir a transação com o ID fornecido
    $excluir_query = "DELETE FROM transacoes WHERE id = $id";
    $resultado = $mysqli->query($excluir_query);

    if ($resultado) {
        // Definir uma mensagem de sucesso na sessão
        $_SESSION['mensagemDetele'] = "Transação excluída com sucesso.";
    } else {
        // Definir uma mensagem de erro na sessão
        $_SESSION['mensagemDetele'] = "Erro ao excluir a transação.";
    }
}

// Redirecionar de volta para a página anterior
header("Location: registros_transacoes.php");
exit();
?>
