<?php
// Função para obter o menu do dia
function getMenuDoDia($dbh) {
    // Array com os dias da semana
    $diasSemana = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
    
    // Obter o dia da semana atual
    $hoje = new DateTime();
    $diaSemana = $diasSemana[$hoje->format('w')];

    // Consultar o menu do dia no banco de dados
    $stmt = $dbh->prepare("SELECT sopa, peixe, carne, info, imagem, dia_semana FROM menu WHERE dia_semana = :dia_semana");
    $stmt->execute([":dia_semana" => $diaSemana]);
    $menu = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar se há menu para o dia
    if ($menu) {
        return $menu;
    } else {
        return ["error" => "Menu não disponível para hoje."];
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cozinha de Mão Cheia</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php require('includes/connection.php') ?>
    <?php require('reservar.php') ?>
     <!-- Header -->
     <header >
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="Imagens/Logo_1.png" alt="Logo" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação" onclick="escondeContainer()">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav justify-content-center nav-underline align-items-center fs-5 flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.html">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servicos.html">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reservas.html">Reservas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactos.php">Contactos</a>
                        </li>
                    </ul>
                    <!-- Opção de Idioma -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link-i active" aria-current="page" href="index.php">pt |</a>
                            <a class="nav-link-i" href="index.php">en</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="background-image" style="position: relative;">
            <img src="imagens/Fundo14_1.jpg" alt="Imagem Fundo">
            <div class="content">
                <h1>Cozinha de Mão Cheia</h1>
                <p>A qualidade é a nossa marca</p>
            </div>
        </div>
    
   </header>

   <!--Conteúdo-->
   <div id="Menu">
    <h2 class="text-center">Menu do dia</h2>
    <p class="text-center">Confira os pratos especiais que temos hoje para si!</p>
    <br>
    <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <?php
                    // Obter o menu do dia
                    $menu = getMenuDoDia($dbh);
                    if (isset($menu['error'])): 
                    ?>
                        <tr>
                            <td colspan="4"><?= htmlspecialchars($menu['error']) ?></td>
                        </tr>
                    <?php else: ?>
                    <div class="card-header text-center"><?= htmlspecialchars($menu['dia_semana']) ?></div>
                    <div class="card-body d-flex">
                            <div class="menu-text mx-4">
                            <p><strong>Sopa: </strong><?= htmlspecialchars($menu['sopa']) ?></p>
                            <p><strong>Peixe: </strong><?= htmlspecialchars($menu['peixe']) ?></p>
                            <p><strong>Carne: </strong><?= htmlspecialchars($menu['carne']) ?></p>
                            <p><?= htmlspecialchars($menu['info']) ?></p>
                         </div>
                        <img class="menu-image" src="imagens/<?= htmlspecialchars($menu['imagem']) ?>" alt="Imagem do Menu" style="width: 150px; max-height: 120px;">
                        <?php endif; ?>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <!--Secção Serviços-->
    <div id="Serviços" class="py-5">
        <h2 class="text-center mb-4">Serviços</h2>
        <div>
            <div class="row">
                <!-- Take-Away -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imagens/Take-away_1.jpg" class="card-img-top" alt="Take-Away">
                        <div class="card-body">
                            <h5 class="card-title">Take-Away</h5>
                            <p class="card-text">Leve para casa os seus pratos favoritos com a qualidade que nos caracteriza.</p>
                            <button class="btn btn-outline-dark" onclick="openServiços()">Saiba Mais</button>
                        </div>
                    </div>
                </div>
                <!-- Casamentos -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imagens/evento5.jpg" class="card-img-top" alt="Casamentos">
                        <div class="card-body">
                            <h5 class="card-title">Casamentos</h5>
                            <p class="card-text">Planeie o dia mais especial da sua vida connosco, com menus personalizados e ambiente acolhedor.</p>
                            <button class="btn btn-outline-dark" onclick="openServiços()">Saiba Mais</button>
                        </div>
                    </div>
                </div>
                <!-- Aniversários -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imagens/aniversario1.jpg" class="card-img-top" alt="Aniversários">
                        <div class="card-body">
                            <h5 class="card-title">Aniversários</h5>
                            <p class="card-text">Celebre o seu aniversário com estilo, comida deliciosa e um ambiente perfeito.</p>
                            <button class="btn btn-outline-dark" onclick="openServiços()">Saiba Mais</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Batizados -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imagens/batizado.jpg" class="card-img-top" alt="Batizados">
                        <div class="card-body">
                            <h5 class="card-title">Batizados</h5>
                            <p class="card-text">Torne o batizado do seu filho num momento inesquecível com o nosso serviço exclusivo.</p>
                            <button class="btn btn-outline-dark" onclick="openServiços()">Saiba Mais</button>
                        </div>
                    </div>
                </div>
                <!-- Eventos Personalizados -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 text-center">
                        <img src="imagens/eventop_2.jpg" class="card-img-top" alt="Eventos Personalizados">
                        <div class="card-body">
                            <h5 class="card-title">Eventos Personalizados</h5>
                            <p class="card-text">Organizamos eventos corporativos, reuniões familiares e muito mais.</p>
                            <button class="btn btn-outline-dark" onclick="openServiços()">Saiba Mais</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <!-- Secção Reservas -->
    <div id="Reservas">
        <h2 class="text-center">Faça a sua reserva</h2>
        <!-- Carrossel -->
        <div id="carouselExampleIndicators" class="carousel slide" style="width: 100%; max-width: 1200px; margin: auto;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner" style="margin-top: 20px;">
              <div class="carousel-item active">
                <img src="imagens/carrossel1_1.jpg" class="d-block w-100" alt="Entrada1">
              </div>
              <div class="carousel-item">
                <img src="imagens/carrossel2_1.JPG" class="d-block w-100" alt="Fruta1">
              </div>
              <div class="carousel-item">
                <img src="imagens/carrossel3_1.JPG" class="d-block w-100" alt="Entrada2">
              </div>
              <div class="carousel-item">
                <img src="imagens/carrossel4.JPG" class="d-block w-100" alt="Fruta2">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Próximo</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
            </button>
          </div>
          <br>
        <p class="text-center mb-3">Reserve já a sua mesa de forma rápida e fácil!</p>

    <!-- Modal -->
    <div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="reservationModalLabel">Reserva - Cozinha de Mão Cheia</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="reservationForm" action="reservar.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Número de telemóvel</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Número de telemóvel" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Data e Hora</label>
                <input type="text" class="form-control" id="date" name="date_time" placeholder="Data e Hora" required>
            </div>
            <div class="mb-3">
                <label for="guests" class="form-label">Número de Pessoas</label>
                <input type="text" class="form-control" id="guests" name="guests" placeholder="Número de Pessoas" required>
            </div>
            <div class="mb-3">
                <label for="specialRequests" class="form-label">Pedidos Especiais</label>
                <textarea class="form-control" id="specialRequests" name="specialRequests" placeholder="Digite aqui suas preferências..." rows="3"></textarea>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Confirmar Reserva</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>

    <!-- Trigger Button -->
    <div class="center-button">
    <button type="button" class="btn btn-secondary btn-lg" data-bs-toggle="modal" data-bs-target="#reservationModal">Fazer Reserva</button>
    </div>
        
    <!-- Footer -->
    <footer class="footer-container">
        <div class="footer text-white py-4 mx-5">
            <div class="row justify-content-between align-items-start g-3">
                <!-- Coluna 1: Contactos -->
                <div class="col-md-5 ms-md-3"> 
                    <h5 class="fw-bold">Contactos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-telephone-fill me-2"></i>961 062 031</li>
                        <li class="mb-2">
                            <a href="mailto:cozinhademaocheia.restaurante@gmail.com" class="nav-link p-0">
                                <i class="bi bi-envelope-fill me-2"></i>cozinhademaocheia.restaurante@gmail.com
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="https://maps.app.goo.gl/gtkJ1nGs2ieNvJpq6" class="nav-link p-0">
                                <i class="bi bi-geo-alt me-2"></i>Travessa Rua da Barqueira Nº 33 R/c, Coimbra 3045-459
                            </a>
                        </li>
                    </ul>
                    <div class="mt-3">
                        <strong>Segunda a Sábado:</strong><br>
                        das 9h às 20h30
                    </div>
                </div>

                <!-- Coluna 2: Redes Sociais -->
                <div class="col-md-5 me-md-3"> 
                    <h5 class="fw-bold">Redes Sociais</h5>
                    <ul class="list-unstyled d-flex">
                        <li class="me-4">
                            <a href="https://facebook.com/Cozinha-de-Mão-Cheia" style="color: white;" target="_blank">
                                <i class="bi bi-facebook fs-3"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/cozinhademaocheia.restaurante" style="color: white;" target="_blank">
                                <i class="bi bi-instagram fs-3"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Rodapé -->
            <div class="text-center mt-4">
                <small>© 2024 Cozinha de Mão Cheia. Todos os direitos reservados.</small>
            </div>
        </div>
    </footer>
                <script>
                    function openServiços(){
                        window.location.href = "servicos.html";
                    }
                </script>
                <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>