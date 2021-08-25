<h2 class="add_project_title">Nouveau Projet</h2>
<form class="add_project_form" method="POST" action="">
    <fieldset class="add_project_client">
        <fieldset class="client_detail">
            <label for="lastname">NOM</label>
            <input type="text" name="lastname" required>
        </fieldset>
        <fieldset class="client_detail">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" required>
        </fieldset>
        <fieldset class="client_detail">
            <label for="phone">Téléphone</label>
            <input type="tel" pattern="0[1-9][0-9]{8}" name="phone" required>
        </fieldset>
        <fieldset class="client_detail">
            <label for="email">Mail</label>
            <input type="email" name="email" required>
        </fieldset>
        <fieldset class="client_detail">
            <label for="address">Adresse</label>
            <input type="text" name="address" required>
        </fieldset>
        <fieldset class="client_detail">
            <label for="zipcode">Code postal</label>
            <input type="text" pattern="[0-9]{5}" name="zipcode" required>
        </fieldset>
        <fieldset class="client_detail">
            <label for="town">Ville</label>
            <input type="text" name="town" required>
        </fieldset>
    </fieldset>
    <fieldset class="project">Type de projet
        <select class = "project_select" name="category" required>
            <option class="project_option"></option>
            <?php foreach($categories as $categorie): ?>
            <option class="project_option" value="<?= $categorie->getName();?>"><?=$categorie->getName();?>
            </option>
            <?php endforeach;?>
        </select>      
    </fieldset>
    <fieldset class="project_type">Type de bien
        <select class="project_type_select" name="type" required>
            <option class="project_type_option"></option>
            <?php foreach($types as $type): ?>
            <option class="project_option" value="<?= $type->getName();?>"><?=$type->getName();?>
            </option>
            <?php endforeach;?>
        </select>
    </fieldset>
    <fieldset class="add_project_details">
        <fieldset class="add_project_detail">
            <label for="surface">Surface du bien</label>
            <input type="number" name="surface"></input>
        </fieldset>
        <fieldset class="add_project_detail">
            <label for="landSurface">Surface du terrain</label>
            <input type="number" name="landSurface"></input>
        </fieldset>
        <fieldset class="add_project_detail">
            <label for="rooms">Nombre de chambres</label>
            <input type="number" name="rooms"></input>
        </fieldset>
        <fieldset class="add_project_detail">
            <label for="location">Localisation du bien</label>
            <input type="text" name="location"></input>
        </fieldset>
            <fieldset class="add_project_detail">
            <label for="price">Budget / Estimation</label>
        <input type="number" name="price"></input>
        </fieldset>
    </fieldset>
    <fieldset class="project_financing">Financement
        <select class="project_financing_select" name="financing">
            <option class="project_financing_option"></option>
            <?php foreach($financings as $financing): ?>
            <option class="project_financing_option" value="<?= $financing->getName();?>"><?=$financing->getName();?>
            </option>
            <?php endforeach;?>
        </select>     
    </fieldset>    
    <fieldset class="project_comments">
        <label for="comments">Commentaires</label>
        <textarea name="comments"></textarea>
    </fieldset>    
    <fieldset class="project_date_appointment">
        <label for="date">Date de RDV</label>
        <input type="date" name="date"></input>
    </fieldset>   
    <button class="add_project_button" type="submit">Enregistrer le projet</button>
</form>