<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations - Cozinha de Mão Cheia</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../imagens/Logo_1.png" type="">
</head>
<body>
    <!-- Header -->
    <header>
        <?php require('../includes/header_en.php') ?>
        <div class="background-image" style="position: relative;">
            <img src="../imagens/Fundo11_1.jpg" alt="Imagem Fundo">
            <div class="content">
                <h1>Reservations</h1>
                <p>Cozinha de Mão Cheia</p>
            </div>
        </div>
    </header>

    <!-- Reserva de Mesas -->
    <div id="reservas">
        <h2 class="text-center" style="margin-top: 50px;">Reserve your table!</h2>
        <p class="text-center mb-5">Reserve your table for a delicious lunch or dinner in a cozy atmosphere!</p>
            <!-- Formulário de Reserva -->
            <div class="form-container">
                <form  action="reservar.php" method="POST">
                    <!-- Nome e Telemóvel -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nome" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="num_tele" class="form-label">Phone number</label>
                            <input type="tel" class="form-control" id="num_tele" name="num_tele" placeholder="Phone number" required>
                        </div>
                    </div>
                                
                    <!-- Telefone e Data/Hora -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="data_hora" class="form-label">Date and Time</label>
                            <input type="text" class="form-control" id="data_hora" name="data_hora" placeholder="Date and Time" required>
                        </div>
                        <div class="col-md-6">
                            <label for="num_pessoas" class="form-label">Number of people</label>
                            <input type="text" class="form-control" id="num_pessoas" name="num_pessoas" placeholder="Number of people" required>
                        </div>
                    </div>
                                
                    <!-- Pedidos Especiais -->
                    <div class="mb-3">
                        <label for="pedidos" class="form-label">Special requests</label>
                        <textarea class="form-control" id="pedidos" name="pedidos" placeholder="Enter your order here" rows="3"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="feedback-btn btn-outline-dark">Reserve</button>
                    </div>
                </form>
            </div>
    </div>

    <!-- Take-Away e outros serviços -->
    <div id="takeaway" class="py-5">
        <div class="container">
            <h2 class="text-center">Take-Away and Other Services</h2>
            <p class="text-center mb-4">Enjoy the unmistakable flavor and quality that sets us apart, all in the comfort of your home.
                <br>And because special moments deserve a unique touch, we offer personalized services to make each occasion truly unforgettable.
            <p class="text-center">
                <strong>Contact us:</strong><br>
                <a href="961062047"><i class="bi bi-telephone-fill"> 961062031</i></a>
            </p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-container">
        <?php require('../includes/footer_en.php') ?>
    </footer>

    <script src="../js/bootstrap.bundle.min.js" ></script>
</body>
</html>