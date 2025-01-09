<?php
    require('includes/connection.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $num_tele = $_POST['num_tele'];
        $data_hora = $_POST['data_hora'];
        $num_pessoas = $_POST['num_pessoas'];
        $pedidos = $_POST['pedidos'];

        // Preparar a query para inserir os dados na tabela reservas
        $stmt = $dbh->prepare("INSERT INTO reservas (nome, num_tele, data_hora, num_pessoas, pedidos) 
                                VALUES (:nome, :num_tele, :data_hora, :num_pessoas, :pedidos)");

        // Executar a query com os dados do formulário
        $result = $stmt->execute([
            ':nome' => $nome,
            ':num_tele' => $num_tele,
            ':data_hora' => $data_hora,
            ':num_pessoas' => $num_pessoas,
            ':pedidos' => $pedidos
        ]);

        if ($result) {
            echo "A sua reserva foi concluída com sucesso";
            echo '<br><button onclick="window.location.href=\'reservas.php\'">Voltar para a Página de Reservas</button>';
            exit;
        } else {
            echo "Erro na reserva. Por favor tente novamente mais tarde.";
            echo '<br><button onclick="window.location.href=\'reservas.php\'">Voltar para a Página de Reservas</button>';
            exit;
        }
    }
?>
