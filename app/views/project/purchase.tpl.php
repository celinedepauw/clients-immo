<div class="purchase_client">
    <h2 class="client_name"><?=strtoupper($purchase->getClientLastname()) . " " . ucfirst($purchase->getClientFirstname())?></h2>
    <div class="client_specificity">Acheteur</div>
</div>
<div class="purchase_details">
    <div class="purchase_detail"><?=strtoupper($purchase->getTypeName()) ?></div>
    <div class="purchase_detail">Surface : <?=$purchase->getProjectSurface() ?> m²</div>
    <div class="purchase_detail">Surface du terrain : <?=$purchase->getProjectLandSurface() ?> m²</div>
    <div class="purchase_detail"><?=$purchase->getProjectRooms() ?> chambres</div>
    <div class="purchase_detail">Zone de recherche : <?=ucfirst($purchase->getProjectLocation()) ?></div>
    <div class="purchase_detail">Budget : <?=$purchase->getProjectPrice() ?> €</div>
    <div class="purchase_detail">Financement : <?=ucfirst($purchase->getFinancingName()) ?></div>
    <div class="purchase_detail">Commentaires : <?=$purchase->getComments() ?></div>
</div>
<div class="purchase_appointment">
    Date de rdv : <?= date("d/m/Y", strtotime($purchase->getAppointmentDate()))?>
</div>
<div class="client_details">
    <div class="client_detail"><?=$purchase->getClientPhone()?></div>
    <div class="client_detail"><?=$purchase->getClientEmail()?></div>
    <div class="client_detail"><?=$purchase->getClientAddress() . " - " . $purchase->getClientZipCode() . " " . $purchase->getClientTown()?></div>
</div>
<button class="purchase_edit_button">Modifier</button>