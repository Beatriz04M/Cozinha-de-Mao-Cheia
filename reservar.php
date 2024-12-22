<?php
// Conexão com o banco de dados
require('includes/connection.php');

// Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar os dados do formulário
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $dateTime = $_POST['date_time'];
    $guests = $_POST['guests'];
    $specialRequests = $_POST['specialRequests'];

    // Preparar a query para inserir os dados na tabela reservas
    $stmt = $dbh->prepare("INSERT INTO reservas (nome, num_tele, data_hora, num_pessoas, pedidos) 
                           VALUES (:name, :phone, :date_time, :guests, :special_requests)");

    // Executar a query com os dados do formulário
    $result = $stmt->execute([
        ':name' => $name,
        ':phone' => $phone,
        ':date_time' => $dateTime,
        ':guests' => $guests,
        ':special_requests' => $specialRequests
    ]);

    // Verificar se a inserção foi bem-sucedida
    if ($result) {
        $_SESSION['message'] = "Reserva realizada com sucesso!";
        header('Location: index.php'); // Redirecionar para a página principal ou onde você quiser
        exit;
    } else {
        $_SESSION['error'] = "Erro ao realizar a reserva. Tente novamente!";
        header('Location: index.php'); // Redirecionar para a página principal ou onde você quiser
        exit;
    }
}
?>
