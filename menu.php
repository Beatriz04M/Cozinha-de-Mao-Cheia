<?php
// Função para obter o menu do dia
function getMenuDoDia($dbh) {
    // Array com os dias da semana
    $diasSemana = ["domingo", "segunda-feira", "terça-feira", "quarta-feira", "quinta-feira", "sexta-feira", "sábado"];
    
    // Obter o dia da semana atual
    $hoje = new DateTime();
    $diaSemana = $diasSemana[$hoje->format('w')];

    // Consultar o menu do dia no banco de dados
    $stmt = $dbh->prepare("SELECT sopa, peixe, carne, info, imagem FROM menu WHERE dia_semana = :dia_semana");
    $stmt->execute([":dia_semana" => $diaSemana]);
    $menu = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar se há menu para o dia
    if ($menu) {
        return $menu;
    } else {
        return ["error" => "Menu não disponível para hoje."];
    }
}

// Obter o menu do dia
header('Content-Type: application/json');
echo json_encode(getMenuDoDia($dbh));
?>
