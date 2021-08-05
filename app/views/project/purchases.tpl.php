<h2 class="sales_title">Mes clients Acheteurs</h2>

<?php foreach ($purchasesList as $currentPurchase) : ?>
    <div class="all_sales">
        <div class="saleSmall">
            <h3 class="saleSmall_client"><?= strtoupper($currentPurchase->getClientLastname()) . " " . ucfirst($currentPurchase->getClientFirstname()) ?></h3>
            <div class="saleSmall_item"><?= ucfirst($currentPurchase->getTypeName()) ?></div>
            <div class="saleSmall_item"><?= $currentPurchase->getProjectRooms() ?> chambres</div>
            <div class="saleSmall_item"><?= ucfirst($currentPurchase->getProjectLocation()) ?></div>
            <div class="saleSmall_item">Budget : <?= $currentPurchase->getProjectPrice() . " €" ?></div>
        </div>
        
    </div>
    <?php endforeach ?>