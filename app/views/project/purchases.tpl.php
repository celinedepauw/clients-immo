<h2 class="purchases_title">Mes Clients Acheteurs</h2>

<?php foreach ($purchasesList as $currentPurchase) : ?>
    <div class="all_purchases">
        <div class="purchaseSmall">
            <h3 class="purchaseSmall_client"><?= strtoupper($currentPurchase->getClientLastname()) . " " . ucfirst($currentPurchase->getClientFirstname()) ?></h3>
            <div class="purchaseSmall_type"><?= ucfirst($currentPurchase->getTypeName()) ?></div>
            <div class="purchaseSmall_rooms"><?= $currentPurchase->getProjectRooms() ?> chambres</div>
            <div class="purchaseSmall_location"><?= ucfirst($currentPurchase->getProjectLocation()) ?></div>
            <div class="purchaseSmall_price">Budget : <?= $currentPurchase->getProjectPrice() . " €" ?></div>
            <a href="">Lien détails</a>
        </div>
        
    </div>
    <?php endforeach ?>