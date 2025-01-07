<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços - Cozinha de Mão Cheia</title>
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
            <img src="imagens/Fundo7_1.jpg" alt="Imagem Fundo">
            <div class="content">
                <h1>Serviços</h1>
                <p>Cozinha de Mão Cheia</p>
            </div>
        </div>
    </header>

    <!-- Serviços -->
    <div class="container servicos-container">
        <div class="row servicos-row align-items-center" style="margin-bottom: 60px;">
            <div class="col-md-6">
                <img src="imagens/Take-away_1.jpg" alt="" class="servicos-fotos">
            </div>
            <div class="col-md-6 servicos-texto">
                <h2><strong>Take-Away</strong></h2>
                <p>Leve para casa os seus pratos favoritos com a qualidade que nos caracteriza.
                <br>Faça o seu pedido por telefone, email ou através das nossas redes sociais, escolha o prato que deseje e faça a recolha no horário combinado.</p>
            </div>
        </div>

        <div class="row servicos-row align-items-center" style="margin-bottom: 60px;">
            <div class="col-md-6 servicos-texto">
                <h2><strong>Casamentos</strong></h2>
                <p>O dia do seu casamento merece ser verdadeiramente especial. 
                <br> Conte connosco para criar um ambiente acolhedor e elegante, acompanhado de menus personalizados que irão encantar os seus convidados.
                <br> Entre em contacto para mais informações e para que possamos ajudá-lo a planear este momento único</p>
            </div>
            <div class="col-md-6">
                <img src="imagens/evento5.jpg" alt="Evento" class="servicos-fotos">
            </div>
        </div>
        
        <div class="row servicos-row align-items-center" style="margin-bottom: 60px;">
            <div class="col-md-6">
                <img src="imagens/aniversario1.jpg" alt="" class="servicos-fotos">
            </div>
            <div class="col-md-6 servicos-texto">
                <h2><strong>Aniversários</strong></h2>
                <p>Celebre o seu aniversário com um toque de sofisticação, rodeado de boa comida e de um ambiente perfeito. 
                <br>Oferecemos a possibilidade de personalizar a sua festa para que tenha um dia memorável, em que todos os detalhes sejam cuidados com a máxima atenção.
                <br>Contacte-nos e permita-nos tornar a sua celebração ainda mais especial.</p>
            </div>
        </div>

        <div class="row servicos-row align-items-center" style="margin-bottom: 60px;">
            <div class="col-md-6 servicos-texto">
                <h2><strong>Batizados</strong></h2>
                <p>O batizado do seu filho é um momento de grande significado. 
                <br>Deixe-nos tornar esta ocasião ainda mais inesquecível, oferecendo-lhe um serviço exclusivo, com menus delicados e um ambiente acolhedor.
                <br>Entre em contacto para saber mais sobre as nossas opções e garantir que cada pormenor seja perfeito</p>
            </div>
            <div class="col-md-6">
                <img src="imagens/batizado.jpg" alt="Evento" class="servicos-fotos">
            </div>
        </div>

        <div class="row servicos-row align-items-center" style="margin-bottom: 60px;">
            <div class="col-md-6">
                <img src="imagens/eventop_2.jpg" alt="" class="servicos-fotos">
            </div>
            <div class="col-md-6 servicos-texto">
                <h2><strong>Eventos personalizados</strong></h2>
                <p>Criamos eventos à sua medida, sejam corporativos, familiares ou qualquer outra ocasião especial. 
                <br>Desde a escolha do menu até à decoração, cuidamos de cada detalhe para garantir uma experiência única e memorável.
                <br>Contacte-nos e deixe-nos ajudá-lo a planear um evento verdadeiramente personalizado.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-container">
        <?php require('includes/footer_pt.php') ?>
    </footer>

    <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>