<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Cozinha de Mão Cheia</title>
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
            <img src="imagens/Fundo10_1.jpg" alt="Imagem Fundo">
            <div class="content">
                <h1>Menu</h1>
                <p>Cozinha de Mão Cheia</p>
            </div>
        </div>
    </header>

    <!-- Menu Semanal -->
    <div id="menu-semanal">
        <div class="container">
            <h2 class="text-center" style="margin-top: 65px; margin-bottom: 15px;">Menu Semanal</h2>
            <p class="text-center" style="margin-bottom: 15px;">De 22 de dezembro a 28 de dezembro</p>
            <div class="section-center row">
                <div class="menu-semanal col-lg-6 col-sm-12">
                    <img src="imagens/peixe3.jpg" alt="" class="menu-foto">
                    <div class="menu-info">
                        <div class="menu-title">
                            <h3 class="card-title">Segunda-feira</h3>
                            <h3 class="card-title">11,00€</h3>
                        </div>
                        <div class="menu-text">
                            <p><strong>Sopa:</strong> Agrião</p>
                            <p><strong>Carne:</strong> Bitoque de porco</p>
                            <p><strong>Peixe:</strong> Perca grelhada</p>
                        </div>
                    </div>
                </div>
                <div class="menu-semanal col-lg-6 col-sm-12">
                    <img src="imagens/carne2_1.jpg" alt="" class="menu-foto">
                    <div class="menu-info">
                        <div class="menu-title">
                            <h3 class="card-title">Terça-feira</h3>
                            <h3 class="card-title">11,00€</h3>
                        </div>
                        <div class="menu-text">
                            <p><strong>Sopa:</strong> Feijão verde</p>
                            <p><strong>Carne:</strong> Bifes de vitela de cebolada</p>
                            <p><strong>Peixe:</strong> Salmão grelhado</p>
                        </div>
                    </div>
                </div>
                <div class="menu-semanal col-lg-6 col-sm-12">
                    <img src="imagens/peixe6.jpg" alt="" class="menu-foto">
                    <div class="menu-info">
                        <div class="menu-title">
                            <h3 class="card-title">Quarta-feira</h3>
                            <h3 class="card-title">11,00€</h3>
                        </div>
                        <div class="menu-text">
                            <p><strong>Sopa:</strong> Couve Portuguesa</p>
                            <p><strong>Carne:</strong> Secretos de porco grelhados</p>
                            <p><strong>Peixe:</strong> Polvo à Lagareiro</p>
                        </div>
                    </div>
                </div>
                <div class="menu-semanal col-lg-6 col-sm-12">
                    <img src="imagens/carne1.jpg" alt="" class="menu-foto">
                    <div class="menu-info">
                        <div class="menu-title">
                            <h3 class="card-title">Quinta-feira</h3>
                            <h3 class="card-title">11,00€</h3>
                        </div>
                        <div class="menu-text">
                            <p><strong>Sopa:</strong> Creme de legumes</p>
                            <p><strong>Carne:</strong> Picanha na grelha</p>
                            <p><strong>Peixe:</strong> Raia frita com arroz de legumes</p>
                        </div>
                    </div>
                </div>
                <div class="menu-semanal col-lg-6 col-sm-12">
                    <img src="imagens/peixe2.jpg" alt="" class="menu-foto">
                    <div class="menu-info">
                        <div class="menu-title">
                            <h3 class="card-title">Sexta-feira</h3>
                            <h3 class="card-title">11,00€</h3>
                        </div>
                        <div class="menu-text">
                            <p><strong>Sopa:</strong> Caldo Verde</p>
                            <p><strong>Carne:</strong> Espetadas mistas</p>
                            <p><strong>Peixe:</strong> Bacalhau cozido com grão</p>
                        </div>
                    </div>
                </div>
                <div class="menu-semanal col-lg-6 col-sm-12">
                    <img src="imagens/carne4.JPG" alt="" class="menu-foto">
                    <div class="menu-info">
                        <div class="menu-title">
                            <h3 class="card-title">Sábado</h3>
                            <h3 class="card-title">11,00€</h3>
                        </div>
                        <div class="menu-text">
                            <p><strong>Sopa:</strong> Espinafres</p>
                            <p><strong>Carne:</strong> Cozido à portuguesa</p>
                            <p><strong>Peixe:</strong> Linguado grelhado</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Menu Geral -->
    <h2 class="text-center" style="margin-top: 120px;">Menu Geral</h2>
    <div class="accordion" id="menuGeralAccordion" style="max-width: 1200px; margin: auto; margin-bottom: 80px;">
        <!-- Entradas -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="headingEntradas">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#menuEntradas" aria-expanded="true" aria-controls="menuEntradas">
                    <strong>Entradas</strong>
                </button>
            </h4>
            <div id="menuEntradas" class="accordion-collapse collapse" aria-labelledby="headingEntradas" data-bs-parent="#menuGeralAccordion">
                <div class="accordion-body">
                    <p>Cesto de Pão e Broa <span class="preco">1,20€</span></p>
                    <p>Azeitonas <span class="preco">1,50€</span></p>
                    <p>Manteiga Individual <span class="preco">1,00€</span></p>
                    <p>Patê Individual <span class="preco">1,00€</span></p>
                    <p>Queijo Curado com Compota <span class="preco">4,50€</span></p>
                    <p>Queijo Curado Simples <span class="preco">3,00€</span></p>
                    <p>Sopa <span class="preco">2,00€</span></p>
                    <p>Legumes Cozidos <span class="preco">3,00€</span></p>
                    <p>Salada <span class="preco">2,00€</span></p>
                    <p>Dose de Batata Frita <span class="preco">3,00€</span></p>
                    <p>Dose de Arroz <span class="preco">3,00€</span></p>
                </div>
            </div>
        </div>
   
        <!-- Pratos de carne -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="headingCarne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#menuCarne" aria-expanded="true" aria-controls="menuCarne">
                    <strong>Pratos de carne</strong> 
                </button>
            </h4>
            <div id="menuCarne" class="accordion-collapse collapse" aria-labelledby="headingCarne" data-bs-parent="#menuGeralAccordion">
                <div class="accordion-body">
                    <p>Alheira <span class="preco">9,50€</span></p>
                    <p>Bife de Peru Recheado <span class="preco">10,00€</span></p>
                    <p>Bife de Vitela (molho cervejeira, mostarda e pimenta rosa) <span class="preco">12,50€</span></p>
                    <p>Bitoque de Porco <span class="preco">9,50€</span></p>
                    <p>Costeleta de Novilho <span class="preco">15,00€</span></p>
                    <p>Francesinha <span class="preco">12,50€</span></p>
                    <p>Entremeada <span class="preco">9,50€</span></p>
                    <p>Plumas de Porco <span class="preco">10,00€</span></p>
                    <p>Secretos de Porco <span class="preco">10,50€</span></p>
                    <p>Picanha <span class="preco">12,50€</span></p>
                </div>
            </div>
        </div>

        <!-- Pratos de Peixe -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="headingPeixe">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#menuPeixe" aria-expanded="true" aria-controls="menuPeixe">
                    <strong>Pratos de Peixe</strong>
                </button>
            </h4>
            <div id="menuPeixe" class="accordion-collapse collapse" aria-labelledby="headingPeixe" data-bs-parent="#menuGeralAccordion">
                <div class="accordion-body">
                    <p>Bacalhau à "Mão Cheia" (para 2 pessoas) <span class="preco">22,50€</span></p>
                    <p>Bacalhau à Brás <span class="preco">11,00€</span></p>
                    <p>Dourada Grelhada <span class="preco">10,00€</span></p>
                    <p>Robalo Grelhado <span class="preco">10,00€</span></p>
                    <p>Perca Grelhada <span class="preco">10,00€</span></p>
                    <p>Filetes de Pescada <span class="preco">9,50€</span></p>
                    <p>Salmão Grelhado <span class="preco">11,00€</span></p>
                    <p>Tentáculos de Pota <span class="preco">10,00€</span></p>
                    <p>Polvo <span class="preco">15,00€</span></p>
                    <p>Chocos <span class="preco">12,00€</span></p>
                </div>
            </div>
        </div>

        <!-- Sobremesas -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="headingSobremesas">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#menuSobremesas" aria-expanded="true" aria-controls="menuSobremesas">
                    <strong>Sobremesas</strong>
                </button>
            </h4>
            <div id="menuSobremesas" class="accordion-collapse collapse" aria-labelledby="headingSobremesas" data-bs-parent="#menuGeralAccordion">
                <div class="accordion-body">
                    <p>Arroz Doce <span class="preco">2,20€</span></p>
                    <p>Bavaroise de Laranja <span class="preco">2,20€</span></p>
                    <p>Bolo de Bolacha <span class="preco">2,50€</span></p>
                    <p>Bolo Frio de Framboesas <span class="preco">2,80€</span></p>
                    <p>Bolo Pudim <span class="preco">2,20€</span></p>
                    <p>Cheesecake <span class="preco">2,50€</span></p>
                    <p>Fatia de Gelado <span class="preco">1,50€</span></p>
                    <p>Leite Creme <span class="preco">2,20€</span></p>
                    <p>Tarte de Limão Merengada <span class="preco">2,50€</span></p>
                    <p>Tarte Fresca de Frutos Vermelhos <span class="preco">2,50€</span></p>
                    <p>Tarte Holandesa <span class="preco">3,00€</span></p>
                    <p>Molotofe <span class="preco">1,80€</span></p>
                    <p>Mousse <span class="preco">1,80€</span></p>
                    <p>Natas do Céu <span class="preco">2,50€</span></p>
                    <p>Panacota com Molho de Frutos Vermelhos<span class="preco">2,50€</span></p>
                    <p>Peça de Fruta <span class="preco">1,50€</span></p>
                    <p>Pudim Caseiro<span class="preco">2,00€</span></p>
                    <p>Pudim de Laranja <span class="preco">2,00€</span></p>
                    <p>Pudim de Côco<span class="preco">2,00€</span></p>
                    <p>Pudim de Ananás<span class="preco">2,20€</span></p>
                    <p>Pudim Flan Caseiro<span class="preco">2,20€</span></p>
                    <p>Salada de Frutas<span class="preco">2,00€</span></p>
                    <p>Tarte de Amêndoa<span class="preco">2,50€</span></p>
                    <p>Torta de Laranja<span class="preco">2,20€</span></p>
                    <p>Tarte de Laranja <span class="preco">2,50€</span></p>
                </div>
            </div>
        </div>

        <!-- Águas / Refrigerantes -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="headingSAlcool">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#menuSAlcool" aria-expanded="true" aria-controls="menuSAlcool">
                    <strong>Águas / Refrigerantes</strong>
                </button>
            </h4>
            <div id="menuSAlcool" class="accordion-collapse collapse" aria-labelledby="headingSAlcool" data-bs-parent="#menuGeralAccordion">
                <div class="accordion-body">
                    <p>Água Mineral 0,5L <span class="preco">1,00€</span></p>
                    <p>Água Mineral 1,5L <span class="preco">1,50€</span></p>
                    <p>Água com Gás <span class="preco">1,00€</span></p>
                    <p>Água com Gás com Sabores <span class="preco">1,70€</span></p>
                    <p>Refrigerantes 0,33cl <span class="preco">1,70€</span></p>
                    <p>Refrigerantes 0,35cl <span class="preco">2,00€</span></p>
                    <p>Néctares <span class="preco">1,70€</span></p>
                    <p>Sumo de Fruta Natural <span class="preco">2,50€</span></p>
                    <p>Água Tónica <span class="preco">1,70€</span></p>
                </div>
            </div>
        </div>

        <!-- Cervejas / Vinhos -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="headingCAlcool">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#menuCAlcool" aria-expanded="true" aria-controls="menuCAlcool">
                    <strong>Cervejas / Vinhos</strong>
                </button>
            </h4>
            <div id="menuCAlcool" class="accordion-collapse collapse" aria-labelledby="headingCAlcool" data-bs-parent="#menuGeralAccordion">
                <div class="accordion-body">
                    <p>Fino / Mini 0,20cl <span class="preco">1,20€</span></p>
                    <p>Cerveja 0,33cl <span class="preco">1,60€</span></p>
                    <p>Cerveja Sem Álcool 0,25cl <span class="preco">1,30€</span></p>
                    <p>Cerveja Sem Álcool 0,33cl <span class="preco">1,70€</span></p>
                    <p>Caneca 0,40cl <span class="preco">2,00€</span></p>
                    <p>Decanter Vinho da Casa Tinto / Branco 0,5L <span class="preco">2,50€</span></p>
                    <p>Vinho a Copo <span class="preco">1,60€</span></p>
                    <p>Vinho Tinto / Branco Regional <span class="preco">7,50€</span></p>
                    <p>Vinho Tinto / Branco Colheita Selecionada <span class="preco">12,50€</span></p>
                    <p>Vinho Tinto / Branco Doc <span class="preco">20,00€</span></p>
                    <p>Espumante <span class="preco">25,00€</span></p>
                </div>
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