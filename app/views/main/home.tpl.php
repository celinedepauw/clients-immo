<main class="main">
    <a href="<?= $router->generate('add-project')?>" class="button_add_project">Nouveau Projet</a>
    <a href="<?= $router->generate('purchases-list')?>" class="main_section">
        <h2 class="main_title">Mes clients acheteurs</h2>
    </a>
    <a href="<?= $router->generate('sales-list')?>"class="main_section">
        <h2 class="main_title">Mes clients vendeurs</h2>
    </a>
</main>
