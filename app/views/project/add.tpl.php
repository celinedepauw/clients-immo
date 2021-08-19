<h2 class="add_project_title">Nouveau Projet</h2>
<form class="add_project_form">
    <fieldset class="add_project_client">
        <fieldset class="client_detail">
            <label>NOM</label>
            <input type="text">
        </fieldset>
        <fieldset class="client_detail">
            <label>Prénom</label>
            <input type="text">
        </fieldset>
        <fieldset class="client_detail">
            <label>Téléphone</label>
            <input type="tel" pattern="0[1-9][0-9]{8}">
        </fieldset>
        <fieldset class="client_detail">
            <label>Mail</label>
            <input type="email">
        </fieldset>
        <fieldset class="client_detail">
            <label>Adresse</label>
            <input type="text">
        </fieldset>
        <fieldset class="client_detail">
            <label>Code postal</label>
            <input type="text" pattern="[0-9]{5}">
        </fieldset>
        <fieldset class="client_detail">
            <label>Ville</label>
            <input type="text">
        </fieldset>
    </fieldset>
    <fieldset class="project">
        <label></label>
        <input type="radio" class="project_input">Acheteur</input>
        <input type="radio" class="project_input">Vendeur</input>
    </fieldset>
    <fieldset class="project_type">
        <label></label>
        <input type="radio">Maison</input>
        <input type="radio">Appartement</input>
        <input type="radio">Terrain</input>
        <input type="radio">Local</input>
    </fieldset>
    <fieldset class="add_project_details">
        <fieldset class="add_project_detail">
            <label>Surface du bien</label>
            <input></input>
        </fieldset>
        <fieldset class="add_project_detail">
            <label>Surface du terrain</label>
            <input></input>
        </fieldset>
        <fieldset class="add_project_detail">
            <label>Nombre de chambres</label>
            <input></input>
        </fieldset>
        <fieldset class="add_project_detail">
            <label>Localisation du bien</label>
            <input></input>
        </fieldset>
            <fieldset class="add_project_detail">
            <label>Budget / Estimation</label>
        <input></input>
        </fieldset>
    </fieldset>
    <fieldset class="project_financing">Financement :
        <label></label>
        <input type="radio">Banque</input>
        <input type="radio">Courtier</input>
    </fieldset>    
    <fieldset class="project_comments">
        <label>Commentaires</label>
        <textarea></textarea>
    </fieldset>    
    <fieldset class="project_date_appointment">
        <label>Date de RDV</label>
        <input type="date"></input>
    </fieldset>   
    <button class="add_project_button">Enregistrer</button>
</form>