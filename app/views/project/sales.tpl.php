<h2>Page listant tous les projets de ventes</h2>

<?php foreach ($salesList as $currentSale) : ?>
    <div>
        <p><?= $currentSale->getClientLastname() ?></p>
        <p><?= $currentSale->getClientFirstname() ?></p>
    </div>
    <?php endforeach ?>