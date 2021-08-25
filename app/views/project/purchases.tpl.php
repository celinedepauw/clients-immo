<h2 class="purchases_title">Mes Clients Acheteurs</h2>
    <div class="all_purchases">
    <?php foreach ($purchasesList as $currentPurchase) : ?>
        <a href="<?= $router->generate('purchase', ['idProject' => $currentPurchase->getId()])?>">
            <div class="purchaseSmall">
                <h3 class="purchaseSmall_client"><?= strtoupper($currentPurchase->getClientLastname()) . " " . ucfirst($currentPurchase->getClientFirstname()) ?></h3>
                <div class="purchaseSmall_type"><?= ucfirst($currentPurchase->getTypeName()) ?></div>
                <div class="purchaseSmall_rooms"><?= $currentPurchase->getProjectRooms() ?> chambres</div>
                <div class="purchaseSmall_location"><?= ucfirst($currentPurchase->getProjectLocation()) ?></div>
                <div class="purchaseSmall_price">Budget : <?= $currentPurchase->getProjectPrice() . " €" ?></div>
            </div>    
        </a>
    <?php endforeach ?>
    </div>