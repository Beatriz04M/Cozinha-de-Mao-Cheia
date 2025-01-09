<?php
// Obter o nome da página atual
$current_page = basename($_SERVER['PHP_SELF']);

// Verificar se a página em português foi definida
$portuguese_page = isset($portuguese_page) ? $portuguese_page : "../$current_page";
?>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="../imagens/Logo_1.png" alt="Logo" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNav" class="collapse navbar-collapse">
            <div class="navbar-nav justify-content-center nav-underline align-items-center fs-5 flex-grow-1">
                <a href="index.php" class="nav-link <?= $current_page == 'index.php' ? 'active' : '' ?> me-3">Home</a>
                <a href="menu.php" class="nav-link <?= $current_page == 'menu.php' ? 'active' : '' ?> me-3">Menu</a>
                <a href="servicos.php" class="nav-link <?= $current_page == 'servicos.php' ? 'active' : '' ?> me-3">Services</a>
                <a href="reservas.php" class="nav-link <?= $current_page == 'reservas.php' ? 'active' : '' ?> me-3">Reservations</a>
                <a href="contactos.php" class="nav-link <?= $current_page == 'contactos.php' ? 'active' : '' ?> me-3">Contacts</a>
            </div>
            <a href="<?= $portuguese_page ?>" class="nav-link ms-auto">pt</a>
        </div>
    </div>
</nav>