<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas - Cozinha de Mão Cheia</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="imagens/Logo_1.png" type="">
</head>
<body>
    <!-- Header -->
    <header>
        <?php require('includes/header_pt.php') ?>
        <div class="background-image" style="position: relative;">
            <img src="imagens/Fundo11_1.jpg" alt="Imagem Fundo">
            <div class="content">
                <h1>Reservas</h1>
                <p>Cozinha de Mão Cheia</p>
            </div>
        </div>
    </header>

    <!-- Reserva de Mesas -->
    <div id="reservas">
        <h2 class="text-center" style="margin-top: 50px;">Reserve a sua mesa!</h2>
        <p class="text-center mb-5">Reserve a sua mesa para um almoço ou jantar delicioso num ambiente acolhedor! </p>
        <!-- Formulário de Reserva -->
        <div class="form-container">
            <form  action="reservar.php" method="POST">
                <!-- Nome e Telemóvel -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="col-md-6">
                        <label for="num_tele" class="form-label">Número de telemóvel</label>
                        <input type="tel" class="form-control" id="num_tele" name="num_tele" required>
                    </div>
                </div>
                                
                <!-- Telefone e Data/Hora -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="data_hora" class="form-label">Data e Hora</label>
                        <input type="text" class="form-control" id="data_hora" name="data_hora" required>
                    </div>
                    <div class="col-md-6">
                        <label for="num_pessoas" class="form-label">Número de Pessoas</label>
                        <input type="text" class="form-control" id="num_pessoas" name="num_pessoas" required>
                    </div>
                </div>
                                
                <!-- Pedidos Especiais -->
                <div class="mb-3">
                    <label for="pedidos" class="form-label">Pedidos Especiais</label>
                    <textarea class="form-control" id="pedidos" name="pedidos"rows="3"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="feedback-btn btn-outline-dark">Reservar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Take-Away e outros serviços -->
    <div id="takeaway" class="py-5">
        <div class="container">
            <h2 class="text-center" style="margin-top: 60px;">Take-Away e Outros Serviços</h2>
            <p class="text-center mb-4">Desfrute do sabor inconfundível e da qualidade que nos distingue, tudo no conforto da sua casa.
                <br>E porque momentos especiais merecem um toque único, oferecemos serviços personalizados para tornar cada ocasião verdadeiramente inesquecível.
            <p class="text-center">
                <strong>Entre em contacto connosco</strong><br>
            </p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-container">
        <?php require('includes/footer_pt.php') ?>
    </footer>

    <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>