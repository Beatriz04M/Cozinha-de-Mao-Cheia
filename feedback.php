<?php
// Conexão com o banco de dados
require('includes/connection.php');

    // Verificar se o formulário foi submetido via POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Verificar se os campos necessários estão definidos
        if (isset($_POST['name'], $_POST['email'], $_POST['message'], $_POST['rating'])) {
            // Capturar os dados do formulário
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $rating = $_POST['rating'];

            // Preparar a query para inserir os dados na tabela feedback
            $stmt = $dbh->prepare("INSERT INTO feedback (nome, email, mensagem, nota) 
                                VALUES (:name, :email, :message, :rating)");

            // Executar a query com os dados do formulário
            $result = $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':message' => $message,
                ':rating' => $rating
            ]);

            // Verificar se a inserção foi bem-sucedida
            if ($result) {
                $_SESSION['message'] = "Feedback enviado com sucesso!";
                header('Location: contactos.php'); // Redirecionar para uma página de agradecimento ou outra
                exit;
            } else {
                $_SESSION['error'] = "Erro ao enviar o feedback. Tente novamente!";
                header('Location: contactos.php'); // Redirecionar de volta para o formulário
                exit;
        }
    }
}
?>