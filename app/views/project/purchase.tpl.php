<div class="project_client">
    <h2 class="client_name"><?=strtoupper($purchase->getClientLastname()) . " " . ucfirst($purchase->getClientFirstname())?></h2>
    <div class="client_specificity">Acheteur</div>
</div>
<div class="project_details">
    <div class="project_detail"><?=strtoupper($purchase->getTypeName()) ?></div>
    <div class="project_detail">Surface : <?=$purchase->getProjectSurface() ?> m²</div>
    <div class="project_detail">Surface du terrain : <?=$purchase->getProjectLandSurface() ?> m²</div>
    <div class="project_detail"><?=$purchase->getProjectRooms() ?> chambres</div>
    <div class="project_detail">Zone de recherche : <?=ucfirst($purchase->getProjectLocation()) ?></div>
    <div class="project_detail">Budget : <?=$purchase->getProjectPrice() ?> €</div>
    <div class="project_detail">Financement : <?=ucfirst($purchase->getFinancingName()) ?></div>
    <div class="project_detail">Commentaires : <?=$purchase->getComments() ?></div>
</div>
<div class="project_appointment">
    Date de rdv : <?= date("d/m/Y", strtotime($purchase->getAppointmentDate()))?>
</div>
<div class="client_details">
    <div class="client_detail"><?=$purchase->getClientPhone()?></div>
    <div class="client_detail"><?=$purchase->getClientEmail()?></div>
    <div class="client_detail"><?=$purchase->getClientAddress() . " - " . $purchase->getClientZipCode() . " " . ucfirst($purchase->getClientTown())?></div>
</div>
<button class="project_edit_button">Modifier</button>