<?php
    require('../includes/connection.php');

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
            echo "Thank you for your feedback!";
            echo '<br><button onclick="window.location.href=\'index.php\'">Return to the Home Page</button>';
            exit;
        } else {
            echo "Feedback submission error. Please try again later.";
            echo '<br><button onclick="window.location.href=\'contactos.html\'">Return to the Contact Page</button>';
            exit;
        } 
    }       
?>
