<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Cozinha de Mão Cheia</title>
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
            <img src="../imagens/Fundo10_1.jpg" alt="Imagem Fundo">
            <div class="content">
                <h1>Menu</h1>
                <p>Cozinha de Mão Cheia</p>
            </div>
        </div>
    </header>

    <!-- Menu Semanal -->
    <div id="menu-semanal">
        <div class="container">
            <h2 class="text-center" style="margin-top: 65px; margin-bottom: 15px;">Weekly Menu</h2>
            <p class="text-center" style="margin-bottom: 15px;">From December 22nd to December 28th</p>
            <div class="section-center row">
                <div class="menu-semanal col-lg-6 col-sm-12">
                    <img src="../imagens/Peixe3.jpg" alt="" class="menu-foto">
                    <div class="menu-info">
                        <div class="menu-title">
                            <h3 class="card-title">Monday</h3>
                            <h3 class="card-title">11,00€</h3>
                        </div>
                        <div class="menu-text">
                            <p><strong>Soup:</strong> Waterceess</p>
                            <p><strong>Meat:</strong> Pork bitoque</p>
                            <p><strong>Fish:</strong> Grilled perch</p>
                        </div>
                    </div>
                </div>
                <div class="menu-semanal col-lg-6 col-sm-12">
                    <img src="../imagens/carne2_1.JPG" alt="" class="menu-foto">
                    <div class="menu-info">
                        <div class="menu-title">
                            <h3 class="card-title">Tuesday</h3>
                            <h3 class="card-title">11,00€</h3>
                        </div>
                        <div class="menu-text">
                            <p><strong>Soup:</strong> Green beans</p>
                            <p><strong>Meat:</strong> Veal steaks in onion gravy</p>
                            <p><strong>Fish:</strong> Grilled salmon</p>
                        </div>
                    </div>
                </div>
                <div class="menu-semanal col-lg-6 col-sm-12">
                    <img src="../imagens/peixe6.JPG" alt="" class="menu-foto">
                    <div class="menu-info">
                        <div class="menu-title">
                            <h3 class="card-title">Wednesday</h3>
                            <h3 class="card-title">11,00€</h3>
                        </div>
                        <div class="menu-text">
                            <p><strong>Soup:</strong> Portuguese cabbage</p>
                            <p><strong>Meat:</strong> Grilled pork secretos</p>
                            <p><strong>Fish:</strong> Lagareiro-style octopus</p>
                        </div>
                    </div>
                </div>
                <div class="menu-semanal col-lg-6 col-sm-12">
                    <img src="../imagens/carne1_1.JPG" alt="" class="menu-foto">
                    <div class="menu-info">
                        <div class="menu-title">
                            <h3 class="card-title">Thursday</h3>
                            <h3 class="card-title">11,00€</h3>
                        </div>
                        <div class="menu-text">
                            <p><strong>Soup:</strong> Vegetable cream</p>
                            <p><strong>Meat:</strong> Picanha on the grill</p>
                            <p><strong>Fish:</strong> Fried stingray with vegetable rice</p>
                        </div>
                    </div>
                </div>
                <div class="menu-semanal col-lg-6 col-sm-12">
                    <img src="../imagens/Peixe2.jpg" alt="" class="menu-foto">
                    <div class="menu-info">
                        <div class="menu-title">
                            <h3 class="card-title">Friday</h3>
                            <h3 class="card-title">11,00€</h3>
                        </div>
                        <div class="menu-text">
                            <p><strong>Soup:</strong> Caldo Verde</p>
                            <p><strong>Meat:</strong> Mixed skewers</p>
                            <p><strong>Fish:</strong> Boiled Cod with Chickpeas</p>
                        </div>
                    </div>
                </div>
                <div class="menu-semanal col-lg-6 col-sm-12">
                    <img src="../imagens/carne3.JPG" alt="" class="menu-foto">
                    <div class="menu-info">
                        <div class="menu-title">
                            <h3 class="card-title">Saturday</h3>
                            <h3 class="card-title">11,00€</h3>
                        </div>
                        <div class="menu-text">
                            <p><strong>Soup:</strong> Spinach</p>
                            <p><strong>Meat:</strong> Cozido à portuguesa</p>
                            <p><strong>Fish:</strong> Grilled sole</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Menu Geral -->
    <h2 class="text-center" style="margin-top: 120px;">General Menu</h2>
    <div class="accordion" id="menuGeralAccordion" style="max-width: 1200px; margin: auto; margin-bottom: 80px;">
        <!-- Entradas -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="headingEntradas">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#menuEntradas" aria-expanded="true" aria-controls="menuEntradas">
                    <strong>Starters</strong>
                </button>
            </h4>
            <div id="menuEntradas" class="accordion-collapse collapse" aria-labelledby="headingEntradas" data-bs-parent="#menuGeralAccordion">
                <div class="accordion-body">
                    <p>Basket of Bread and Cornbread <span class="preco">1,20€</span></p>
                    <p>Olives <span class="preco">1,50€</span></p>
                    <p>Individual Butter Portion <span class="preco">1,00€</span></p>
                    <p>Individual Pâté Portion <span class="preco">1,00€</span></p>
                    <p>Cured Cheese with Jam <span class="preco">4,50€</span></p>
                    <p>Plain Cured Cheese <span class="preco">3,00€</span></p>
                    <p>Soup <span class="preco">2,00€</span></p>
                    <p>Boiled Vegetables <span class="preco">3,00€</span></p>
                    <p>Salad <span class="preco">2,00€</span></p>
                    <p>Portion of French Fries <span class="preco">3,00€</span></p>
                    <p>Portion of Rice <span class="preco">3,00€</span></p>
                </div>
            </div>
        </div>
   
        <!-- Pratos de carne -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="headingCarne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#menuCarne" aria-expanded="true" aria-controls="menuCarne">
                    <strong>Meat Dishes</strong> 
                </button>
            </h4>
            <div id="menuCarne" class="accordion-collapse collapse" aria-labelledby="headingCarne" data-bs-parent="#menuGeralAccordion">
                <div class="accordion-body">
                    <p>Alheira Sausage <span class="preco">9,50€</span></p>
                    <p>Stuffed Turkey Steak <span class="preco">10,00€</span></p>
                    <p>Veal Steak (beer sauce, mustard, and pink peppercorns) <span class="preco">12,50€</span></p>
                    <p>Pork Bitoque <span class="preco">9,50€</span></p>
                    <p>Veal Chop <span class="preco">15,00€</span></p>
                    <p>Francesinha <span class="preco">12,50€</span></p>
                    <p>Pork Belly Strips <span class="preco">9,50€</span></p>
                    <p>Pork Plumas <span class="preco">10,00€</span></p>
                    <p>Pork Secretos <span class="preco">10,50€</span></p>
                    <p>Picanha <span class="preco">12,50€</span></p>
                </div>
            </div>
        </div>

        <!-- Pratos de Peixe -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="headingPeixe">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#menuPeixe" aria-expanded="true" aria-controls="menuPeixe">
                    <strong>Fish Dishes</strong>
                </button>
            </h4>
            <div id="menuPeixe" class="accordion-collapse collapse" aria-labelledby="headingPeixe" data-bs-parent="#menuGeralAccordion">
                <div class="accordion-body">
                    <p>"Mão Cheia" Cod (for 2 people) <span class="preco">22,50€</span></p>
                    <p>Bacalhau à Brás <span class="preco">11,00€</span></p>
                    <p>Grilled Sea Bream <span class="preco">10,00€</span></p>
                    <p>Grilled Seabass <span class="preco">10,00€</span></p>
                    <p>Grilled Perch <span class="preco">10,00€</span></p>
                    <p>Whiting Fillets <span class="preco">9,50€</span></p>
                    <p>Grilled Salmon <span class="preco">11,00€</span></p>
                    <p>Squid Tentacles <span class="preco">10,00€</span></p>
                    <p>Octopus <span class="preco">15,00€</span></p>
                    <p>Cuttlefish <span class="preco">12,00€</span></p>
                </div>
            </div>
        </div>

        <!-- Sobremesas -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="headingSobremesas">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#menuSobremesas" aria-expanded="true" aria-controls="menuSobremesas">
                    <strong>Desserts</strong>
                </button>
            </h4>
            <div id="menuSobremesas" class="accordion-collapse collapse" aria-labelledby="headingSobremesas" data-bs-parent="#menuGeralAccordion">
                <div class="accordion-body">
                    <p>Arroz Doce <span class="preco">2,20€</span></p>
                    <p>Orange Bavaroise <span class="preco">2,20€</span></p>
                    <p>Portuguese Biscuit Cake <span class="preco">2,50€</span></p>
                    <p>Cold Raspberry Cake <span class="preco">2,80€</span></p>
                    <p>Pudding Cake <span class="preco">2,20€</span></p>
                    <p>Cheesecake <span class="preco">2,50€</span></p>
                    <p>Ice Cream Slice <span class="preco">1,50€</span></p>
                    <p>Leite Creme (Portuguese Custard) <span class="preco">2,20€</span></p>
                    <p>Lemon Meringue Pie <span class="preco">2,50€</span></p>
                    <p>Fresh Red Berry Tart <span class="preco">2,50€</span></p>
                    <p>Dutch Tart <span class="preco">3,00€</span></p>
                    <p>Molotof <span class="preco">1,80€</span></p>
                    <p>Mousse <span class="preco">1,80€</span></p>
                    <p>Heavenly Cream <span class="preco">2,50€</span></p>
                    <p>Panna Cotta with Red Fruit Sauce<span class="preco">2,50€</span></p>
                    <p>Fruit Piece <span class="preco">1,50€</span></p>
                    <p>Homemade Pudding <span class="preco">2,00€</span></p>
                    <p>Orange Pudding <span class="preco">2,00€</span></p>
                    <p>Coconut Pudding <span class="preco">2,00€</span></p>
                    <p>Pineapple Pudding <span class="preco">2,20€</span></p>
                    <p>Homemade Flan Pudding <span class="preco">2,20€</span></p>
                    <p>Fruit Salad <span class="preco">2,00€</span></p>
                    <p>Almond Tart <span class="preco">2,50€</span></p>
                    <p>Orange Roll Cake <span class="preco">2,20€</span></p>
                    <p>Orange Tart <span class="preco">2,50€</span></p>
                </div>
            </div>
        </div>

        <!-- Águas / Refrigerantes -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="headingSAlcool">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#menuSAlcool" aria-expanded="true" aria-controls="menuSAlcool">
                    <strong>Water / Soft Drinks</strong>
                </button>
            </h4>
            <div id="menuSAlcool" class="accordion-collapse collapse" aria-labelledby="headingSAlcool" data-bs-parent="#menuGeralAccordion">
                <div class="accordion-body">
                    <p>Mineral Water 0.5L <span class="preco">1,00€</span></p>
                    <p>Mineral Water 1.5L <span class="preco">1,50€</span></p>
                    <p>Sparkling Water <span class="preco">1,00€</span></p>
                    <p>Flavored Sparkling Water <span class="preco">1,70€</span></p>
                    <p>Soft Drinks 0.33L <span class="preco">1,70€</span></p>
                    <p>Soft Drinks 0.35L <span class="preco">2,00€</span></p>
                    <p>Fruit Nectar <span class="preco">1,70€</span></p>
                    <p>Fresh Fruit Juice <span class="preco">2,50€</span></p>
                    <p>Tonic Water <span class="preco">1,70€</span></p>
                </div>
            </div>
        </div>

        <!-- Cervejas / Vinhos -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="headingCAlcool">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#menuCAlcool" aria-expanded="true" aria-controls="menuCAlcool">
                    <strong>Beers / Wines</strong>
                </button>
            </h4>
            <div id="menuCAlcool" class="accordion-collapse collapse" aria-labelledby="headingCAlcool" data-bs-parent="#menuGeralAccordion">
                <div class="accordion-body">
                    <p>Fino / Mini Beer 0,20cl <span class="preco">1,20€</span></p>
                    <p>Beer 0,33cl <span class="preco">1,60€</span></p>
                    <p>Alcohol-Free Beer 0,25cl <span class="preco">1,30€</span></p>
                    <p>Alcohol-Free Beer 0,33cl <span class="preco">1,70€</span></p>
                    <p>Mug Beer 0,40cl <span class="preco">2,00€</span></p>
                    <p>House Wine Decanter Red / White 0,5L <span class="preco">2,50€</span></p>
                    <p>Wine by the Glass <span class="preco">1,60€</span></p>
                    <p>Regional Red / White Wine <span class="preco">7,50€</span></p>
                    <p>Selected Harvest Red / White Wine <span class="preco">12,50€</span></p>
                    <p>DOC Red / White Wine <span class="preco">20,00€</span></p>
                    <p>Sparkling Wine / Champagne <span class="preco">25,00€</span></p>
                </div>
            </div>
        </div>   
    </div>
   
    <!-- Footer -->
    <footer class="footer-container">
        <?php require('../includes/footer_en.php') ?>
    </footer>

    <script src="../js/bootstrap.bundle.min.js" ></script>
</body>
</html>