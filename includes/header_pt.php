<?php
// Obter o nome da página atual
$current_page = basename($_SERVER['PHP_SELF']);

// Verificar se a página em inglês foi definida
$english_page = isset($english_page) ? $english_page : "en/$current_page";
?>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="imagens/Logo_1.png" alt="Logo" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação" onclick="escondeContainer()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="menu-navegação" class="collapse navbar-collapse" >
            <div class="navbar-nav justify-content-center nav-underline align-items-center fs-5 flex-grow-1 pe-3">
                <a href="index.php" class="nav-link <?= $current_page == 'index.php' ? 'active' : '' ?> me-3">Home</a>
                <a href="menu.php" class="nav-link <?= $current_page == 'menu.php' ? 'active' : '' ?> me-3">Menu</a>
                <a href="servicos.php" class="nav-link <?= $current_page == 'servicos.php' ? 'active' : '' ?> me-3">Serviços</a>
                <a href="reservas.php" class="nav-link <?= $current_page == 'reservas.php' ? 'active' : '' ?> me-3">Reservas</a>
                <a href="contactos.php" class="nav-link <?= $current_page == 'contactos.php' ? 'active' : '' ?> me-3">Contactos</a>
            </div>
            <a href="<?= $english_page ?>" class="nav-link ms-auto">en</a>
        </div>
    </div>
</nav>
