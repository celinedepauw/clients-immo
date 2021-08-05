<h2>Page listant tous les projets</h2>

<?php foreach ($projectsList as $currentProject) : ?>
    <div>
        <p><?= $currentProject->getClientLastname() ?></p>
        <p><?= $currentProject->getClientFirstname() ?></p>
    </div>
    <?php endforeach ?>