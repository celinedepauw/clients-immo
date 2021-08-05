<h2>Page listant tous les projets d'achats</h2>

<?php foreach ($purchasesList as $currentPurchase) : ?>
    <div>
        <p><?= $currentPurchase->getClientLastname() ?></p>
        <p><?= $currentPurchase->getClientFirstname() ?></p>
    </div>
    <?php endforeach ?>