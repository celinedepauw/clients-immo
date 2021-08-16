<div class="project_client">
    <h2 class="client_name"><?=strtoupper($sale->getClientLastname()) . " " . ucfirst($sale->getClientFirstname())?></h2>
    <div class="client_specificity">Vendeur</div>
</div>
<div class="project_details">
    <div class="project_detail"><?=strtoupper($sale->getTypeName()) ?></div>
    <div class="project_detail">Surface : <?=$sale->getProjectSurface() ?> m²</div>
    <div class="project_detail">Surface du terrain : <?=$sale->getProjectLandSurface() ?> m²</div>
    <div class="project_detail"><?=$sale->getProjectRooms() ?> chambres</div>
    <div class="project_detail">Localisation : <?=ucfirst($sale->getProjectLocation()) ?></div>
    <div class="project_detail">Estimation : <?=$sale->getProjectPrice() ?> €</div>
    <div class="project_detail">Commentaires : <?=$sale->getComments() ?></div>
</div>
<div class="project_appointment">
    Date de rdv : <?= date("d/m/Y", strtotime($sale->getAppointmentDate()))?>
</div>
<div class="client_details">
    <div class="client_detail"><?=$sale->getClientPhone()?></div>
    <div class="client_detail"><?=$sale->getClientEmail()?></div>
    <div class="client_detail"><?=$sale->getClientAddress() . " - " . $sale->getClientZipCode() . " " . ucfirst($sale->getClientTown())?></div>
</div>
<button class="project_edit_button">Modifier</button>