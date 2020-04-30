<div id="modal-sup-perso">
    <div id="form-bloc">
        <div id="form-body">
            <div class="">
                <h4>Supprimer un personnage</h4>
            </div>
        <form action="supPerso.php" method="POST">
            <div class="form-div">
                <label for="sup_perso_prenom">Prénom</label>
                <input type="text" name="sup_perso_prenom" id="sup_perso_prenom" placeholder="Prénom du personnage" required>
            </div>
            <div class="form-div">
                <label for="sup_perso_nom">Nom</label>
                <input type="text" name="sup_perso_nom" id="sup_perso_nom" placeholder="Nom du personnage">
            </div>
            <div class='btn'>
                <div class="form-btn">
                    <input type="button" name="fermer" id="fermer" value="Fermer">
                </div>
                <div class="form-btn">
                    <input type="submit">
                </div>
            </div>
        </form>
        </div>
    </div>
</div>