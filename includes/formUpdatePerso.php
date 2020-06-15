<div id="modal-update-perso">
    <div id="form-bloc">
        <div id="form-body">
            <div class="">
                <h4>Ajouter un personnage</h4>
            </div>
        <form action="updatePerso.php" method="POST" enctype="multipart/form-data">
            <div class="form-div">
                <label for="perso_prenom">Prénom</label>
                <input type="text" name="perso_prenom" id="perso_prenom" placeholder="Prénom du personnage" required>
            </div>
            <div class="form-div">
                <label for="perso_prenom">Nom</label>
                <input type="text" name="perso_nom" id="perso_nom" placeholder="Nom du personnage">
            </div>
            <div class="form-div">
                <label>Image</label>
                <input type="file" name="perso_img" id="perso_img" required>
            </div>
            <div class="form-div">
                <label>Biographie</label>
                <input type="text" name="perso_biographie" id="perso_biographie" placeholder="Biographie">
            </div>
            <div class="form-div">
                <label>Race</label>
                <input type="text" name="perso_race" id="perso_race" placeholder="Race">
            </div>
            <div class="form-div">
                <label>Catégorie</label>
                <input type="text" name="perso_categorie" id="perso_categorie" placeholder="Categorie">
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