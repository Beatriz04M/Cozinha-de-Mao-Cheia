<?php
// Função para obter o menu do dia
function getMenuDoDia($dbh) {
    // Array com os dias da semana
    $diasSemana = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
    
    // Obter o dia da semana atual
    $hoje = new DateTime();
    $diaSemana = $diasSemana[$hoje->format('w')];

    // Consultar o menu do dia na base de dados
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cozinha de Mão Cheia</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../imagens/Logo_1.png" type="">
</head>
<body>
    <?php require('../includes/connection.php') ?>

    <!-- Header -->
    <header>
        <?php require('../includes/header_en.php') ?>
        <div class="background-image" style="position: relative;">
            <img src="../imagens/Fundo14_1.jpg" alt="Imagem Fundo">
            <div class="content">
                <h1>Cozinha de Mão Cheia</h1>
                <p>Quality is our mark</p>
            </div>
        </div>
    </header>

    <!--Menu-->
    <div id="Menu">
        <h2 class="text-center">Menu of the day</h2>
        <p class="text-center">Check out the special dishes we have for you today!</p>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-4">
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
                            <img class="menu-image" src="../imagens/<?= htmlspecialchars($menu['imagem']) ?>" alt="Imagem do Menu" style="width: 150px; max-height: 120px;">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <!--Serviços-->
    <div id="Serviços" class="py-5">
        <h2 class="text-center mb-4">Services</h2>
            <div class="row">
                <!-- Take-Away -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="../imagens/Take-away_1.jpg" class="card-img-top" alt="Take-Away">
                        <div class="card-body">
                            <h5 class="card-title">Take-Away</h5>
                            <p class="card-text">Take home your favorite dishes with the quality that characterizes us.</p>
                            <button class="btn btn-outline-dark" onclick="openServiços()">See More</button>
                        </div>
                    </div>
                </div>
                <!-- Casamentos -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="../imagens/evento5.jpg" class="card-img-top" alt="Casamentos">
                        <div class="card-body">
                            <h5 class="card-title">Weddings</h5>
                            <p class="card-text">Plan the most special day of your life with us, with personalized menus and a welcoming atmosphere.</p>
                            <button class="btn btn-outline-dark" onclick="openServiços()">See More</button>
                        </div>
                    </div>
                </div>
                <!-- Aniversários -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="../imagens/aniversario1.jpg" class="card-img-top" alt="Aniversários">
                        <div class="card-body">
                            <h5 class="card-title">Birthdays</h5>
                            <p class="card-text">Celebrate your birthday in style, delicious food and a perfect atmosphere.</p>
                            <button class="btn btn-outline-dark" onclick="openServiços()">See More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Batizados -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 text-center">
                        <img src="../imagens/batizado.jpg" class="card-img-top" alt="Batizados">
                        <div class="card-body">
                            <h5 class="card-title">Baptisms</h5>
                            <p class="card-text">Make your child's baptism an unforgettable moment with our exclusive service.</p>
                            <button class="btn btn-outline-dark" onclick="openServiços()">See More</button>
                        </div>
                    </div>
                </div>
                <!-- Eventos Personalizados -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 text-center">
                        <img src="../imagens/eventop_2.jpg" class="card-img-top" alt="Eventos Personalizados">
                        <div class="card-body">
                            <h5 class="card-title">Custom Events</h5>
                            <p class="card-text">We organize corporate events, family reunions and more.</p>
                            <button class="btn btn-outline-dark" onclick="openServiços()">See More</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>    

    <!-- Reservas -->
    <div id="Reservas">
        <h2 class="text-center">Make your reservation</h2>
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
                    <img src="../imagens/carrossel1_1.jpg" class="d-block w-100" alt="Entrada1">
                </div>
                <div class="carousel-item">
                    <img src="../imagens/carrossel2_1.JPG" class="d-block w-100" alt="Fruta1">
                </div>
                <div class="carousel-item">
                    <img src="../imagens/carrossel3_1.JPG" class="d-block w-100" alt="Entrada2">
                </div>
                <div class="carousel-item">
                    <img src="../imagens/carrossel4.JPG" class="d-block w-100" alt="Fruta2">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
        </div>
        <br>
        <p class="text-center mb-3">Reserve your table quickly and easily!</p>

        <!-- Modal -->
        <div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reservationModalLabel">Reservation - Cozinha de Mão Cheia</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="reservationForm" action="reservar.php" method="POST">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Name</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="num_tele" class="form-label">Phone number</label>
                                <input type="tel" class="form-control" id="num_tele" name="num_tele" placeholder="Phone number" required>
                            </div>
                            <div class="mb-3">
                                <label for="data_hora" class="form-label">Date and Time</label>
                                <input type="text" class="form-control" id="data_hora" name="data_hora" placeholder="Date and Time" required>
                            </div>
                            <div class="mb-3">
                                <label for="num_pessoas" class="form-label">Number of people</label>
                                <input type="text" class="form-control" id="num_pessoas" name="num_pessoas" placeholder="Number of people" required>
                            </div>
                            <div class="mb-3">
                                <label for="pedidos" class="form-label">Special requests</label>
                                <textarea class="form-control" id="pedidos" name="pedidos" placeholder="Enter your order here" rows="3"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Confirm Reservation</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trigger Button -->
        <div class="center-button">
            <button type="button" class="btn btn-secondary btn-lg" data-bs-toggle="modal" data-bs-target="#reservationModal">Make Reservation</button>
        </div>
    </div> 
       
    <!-- Footer -->
    <footer class="footer-container">
        <?php require('../includes/footer_en.php') ?>
    </footer>
    
    <script>
        function openServiços(){
            window.location.href = "servicos.php";
        }
    </script>
    <script src="../js/bootstrap.bundle.min.js" ></script>
</body>
</html>