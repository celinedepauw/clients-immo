<h2 class="sales_title">Mes Clients Vendeurs</h2>

<?php foreach ($salesList as $currentSale) : ?>
    <div class="all_sales">
        <div class="saleSmall">
            <h3 class="saleSmall_client"><?= strtoupper($currentSale->getClientLastname()) . " " . ucfirst($currentSale->getClientFirstname()) ?></h3>
            <div class="saleSmall_type"><?= ucfirst($currentSale->getTypeName()) ?></div>
            <div class="saleSmall_rooms"><?= $currentSale->getProjectRooms() ?> chambres</div>
            <div class="saleSmall_location"><?= ucfirst($currentSale->getProjectLocation()) ?></div>
            <div class="saleSmall_price">Estimation : <?= $currentSale->getProjectPrice() . " €" ?></div>
            <a href="<?= $router->generate('sale', ['idProject' => $currentSale->getId()])?>">Lien détails</a>
        </div>
        
    </div>
    <?php endforeach ?>