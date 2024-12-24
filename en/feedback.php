<?php
require('includes/connection.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'], $_POST['email'], $_POST['mensagem'], $_POST['nota'])) {
            $nome = trim($_POST['nome']);
            $email = trim($_POST['email']);
            $mensagem = trim($_POST['mensagem']);
            $nota = trim($_POST['nota']);

        if (!empty($mensagem)) {
            $sql = 'INSERT INTO feedback (nome, email, mensagem, nota) VALUES (:nome, :email, :mensagem, :nota)';
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
            $stmt->bindValue(':email', $email, PDO::PARAM_STR);
            $stmt->bindValue(':mensagem', $mensagem, PDO::PARAM_STR);  
            $stmt->bindValue(':nota', $nota, PDO::PARAM_INT); 
            $stmt->execute();
           echo "Obrigado pelo seu feedback!";
            } else 
                echo "Erro na submissão do feedback. Por favor tente novamente mais tarde.";
            exit;    
        }
?>
