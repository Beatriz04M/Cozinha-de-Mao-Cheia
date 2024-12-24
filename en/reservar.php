<?php
require('includes/connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $num_tele = $_POST['num_tele'];
    $data_hora = $_POST['data_hora'];
    $num_pessoas = $_POST['num_pessoas'];
    $pedidos = $_POST['pedidos'];

    // Preparar a query para inserir os dados na tabela reservas
    $stmt = $dbh->prepare("INSERT INTO reservas (nome, num_tele, data_hora, num_pessoas, pedidos) VALUES (:nome, :num_tele, :data_hora, :num_pessoas, :pedidos)");

    // Executar a query com os dados do formulário
    $result = $stmt->execute([
        ':nome' => $nome,
        ':num_tele' => $num_tele,
        ':data_hora' => $data_hora,
        ':num_pessoas' => $num_pessoas,
        ':pedidos' => $pedidos
    ]);

    // Verificar se a inserção foi bem-sucedida
    if ($result) {
        header('Location: index.php'); // Redirecionar para a página principal ou onde você quiser
        echo "Obrigado pelo seu feedback!";
        exit;
    } else {
        header('Location: index.php'); // Redirecionar para a página principal ou onde você quiser
        echo "Erro na submissão do feedback. Por favor tente novamente mais tarde.";
        exit;
    }
}
?>
