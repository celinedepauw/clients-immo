<div class="project_client">
    <h2 class="client_name"><?=strtoupper($project->getClientLastname()) . " " . ucfirst($project->getClientFirstname())?></h2>
    <div class="client_specificity">Vendeur</div>
</div>
<div class="project_details">
    <div class="project_detail"><?=strtoupper($project->getTypeName()) ?></div>
    <div class="project_detail">Surface : <?=$project->getProjectSurface() ?> m²</div>
    <div class="project_detail">Surface du terrain : <?=$project->getProjectLandSurface() ?> m²</div>
    <div class="project_detail"><?=$project->getProjectRooms() ?> chambres</div>
    <div class="project_detail">Localisation : <?=ucfirst($project->getProjectLocation()) ?></div>
    <div class="project_detail">Estimation : <?=$project->getProjectPrice() ?> €</div>
    <div class="project_detail">Commentaires : <?=$project->getComments() ?></div>
</div>
<div class="project_appointment">
    Date de rdv : <?= date("d/m/Y", strtotime($project->getAppointmentDate()))?>
</div>
<div class="client_details">
    <div class="client_detail"><?=$project->getClientPhone()?></div>
    <div class="client_detail"><?=$project->getClientEmail()?></div>
    <div class="client_detail"><?=$project->getClientAddress() . " - " . $project->getClientZipCode() . " " . ucfirst($project->getClientTown())?></div>
</div>
<button class="project_edit_button">
    <a href="<?= $router->generate('edit-project', ['idProject' => $project->getId()])?>">Modifier le projet</a>
</button> 