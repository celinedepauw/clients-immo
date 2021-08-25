<h2 class="edit_project_title">Modifier le Projet</h2>
<form class="edit_project_form" method="POST" action="">
    <fieldset class="edit_project_client">
        <fieldset class="client_detail">
            <label for="lastname">NOM</label>
            <input type="text" name="lastname" value="<?=strtoupper($project->getClientLastname())?>" required >
        </fieldset>
        <fieldset class="client_detail">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" value="<?=ucfirst($project->getClientFirstname())?>" required>
        </fieldset>
        <fieldset class="client_detail">
            <label for="phone">Téléphone</label>
            <input type="tel" pattern="0[1-9][0-9]{8}" name="phone" value="<?=$project->getClientPhone()?>"required>
        </fieldset>
        <fieldset class="client_detail">
            <label for="email">Mail</label>
            <input type="email" name="email" value="<?=$project->getClientEmail()?>" required>
        </fieldset>
        <fieldset class="client_detail">
            <label for="address">Adresse</label>
            <input type="text" name="address" value="<?=$project->getClientAddress()?>" required>
        </fieldset>
        <fieldset class="client_detail">
            <label for="zipcode">Code postal</label>
            <input type="text" pattern="[0-9]{5}" name="zipcode" value="<?=$project->getClientZipCode()?>" required>
        </fieldset>
        <fieldset class="client_detail">
            <label for="town">Ville</label>
            <input type="text" name="town" value="<?=$project->getClientTown()?>" required>
        </fieldset>
    </fieldset>
    <fieldset class="project">Type de projet
        <select class = "project_select" name="category" required>
            <option class="project_option"></option>
            <?php foreach($categories as $categorie): ?>
            <option class="project_option" value="<?= $categorie->getName();?>" <?= $categorie->getId() == $project->getProjectCategory() ? 'selected' : '' ?>><?=$categorie->getName();?>
            </option>
            <?php endforeach;?>
        </select>
        
    </fieldset>
    <fieldset class="project_type">Type de bien
        <select class="project_type_select" name="type" required>
            <option class="project_type_option" value="" ></option>
            <?php foreach($types as $type): ?>
            <option class="project_option" value="<?= $type->getName();?>" <?= $type->getId() == $project->getProjectType() ? 'selected' : '' ?>><?=$type->getName();?>
            </option>
            <?php endforeach;?>
        </select>
    </fieldset>
    <fieldset class="edit_project_details">
        <fieldset class="edit_project_detail">
            <label for="surface">Surface du bien</label>
            <input type="number" name="surface" value="<?=$project->getProjectSurface() ?>" required></input>
        </fieldset>
        <fieldset class="edit_project_detail">
            <label for="landSurface">Surface du terrain</label>
            <input type="number" name="landSurface" value="<?=$project->getProjectLandSurface() ?>"></input>
        </fieldset>
        <fieldset class="edit_project_detail">
            <label for="rooms">Nombre de chambres</label>
            <input type="number" name="rooms" value ="<?=$project->getProjectRooms() ?>" required></input>
        </fieldset>
        <fieldset class="edit_project_detail">
            <label for="location">Localisation du bien</label>
            <input type="text" name="location" value="<?=ucfirst($project->getProjectLocation()) ?>" required></input>
        </fieldset>
            <fieldset class="edit_project_detail">
            <label for="price">Budget / Estimation</label>
        <input type="number" name="price" value="<?=$project->getProjectPrice() ?>" required></input>
        </fieldset>
    </fieldset>
    <fieldset class="project_financing">Financement
        <select class="project_financing_select" name="financing">
            <option class="project_financing_option"></option>
            <?php foreach($financings as $financing): ?>
            <option class="project_financing_option" value="<?= $financing->getName();?>" <?= $financing->getId() == $project->getProjectFinancing() ? 'selected' : '' ?>><?=$financing->getName();?>
            </option>
            <?php endforeach;?>
            </select>     
    </fieldset>    
    <fieldset class="project_comments">
        <label for="comments">Commentaires</label>
        <textarea name="comments" placeholder="<?=$project->getComments() ?>"></textarea>
    </fieldset>    
    <fieldset class="project_date_appointment">
        <label for="date">Date de RDV</label>
        <input type="date" name="date" value="<?= $project->getAppointmentDate()?>"></input>
    </fieldset>   
    <button class="edit_project_button" type="submit">Enregistrer les modifications</button>
</form>