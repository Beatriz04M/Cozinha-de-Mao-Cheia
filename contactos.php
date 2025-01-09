<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos - Cozinha de Mão Cheia</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="imagens/Logo_1.png" type="">
</head>
<body>
    <header>
        <?php require('includes/header_pt.php') ?>
        <div class="background-image" style="position: relative;">
            <img src="imagens/Fundo12_1.jpg" alt="Imagem Fundo">
            <div class="content">
                <h1>Contactos</h1>
                <p>Cozinha de Mão Cheia</p>
            </div>
        </div>
    </header>

    <!-- Mapa -->
    <div id="Contactos">
        <h2 class="text-center"><strong>Venha visitar-nos!</strong></h2>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2757.930930060469!2d-8.5017287!3d40.19542779999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd22f937c89e7003%3A0x23b3ed2b3de94215!2sRestaurante%20Cozinha%20de%20M%C3%A3o%20Cheia!5e1!3m2!1spt-PT!2spt!4v1732066115132!5m2!1spt-PT!2spt" 
            width="600" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <!-- Feedback -->
    <div class="feedback-section">
        <h2 class="feedback-title">Envie-nos o seu Feedback</h2>
        <p class="text-center mb-4">Ajude-nos a melhorar a sua experiência!</p>
        <!-- Formulário de Feedback -->
        <form action="feedback.php" method="POST">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Feedback</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
            </div>
            <div class="mb-4">
                <label class="form-label">Nota</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="nota" id="nota1" value="1" required>
                        <label class="form-check-label" for="nota1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="nota" id="nota2" value="2">
                        <label class="form-check-label" for="nota2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="nota" id="nota3" value="3">
                        <label class="form-check-label" for="nota3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="nota" id="nota4" value="4">
                        <label class="form-check-label" for="nota4">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="nota" id="nota5" value="5">
                        <label class="form-check-label" for="nota5">5</label>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="feedback-btn btn-outline-dark">Enviar Feedback</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="footer-container">
        <?php require('includes/footer_pt.php') ?>
    </footer>

    <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>