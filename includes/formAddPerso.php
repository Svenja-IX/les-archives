<div id="modal">
    <div id="form-bloc">
        <div id="form-body">
            <div class="">
                <h4>Ajouter un personnage</h4>
            </div>
        <form action="addPerso.php" method="POST">
            <div class="form-div">
                <label for="perso_prenom">Prénom*</label>
                <input type="text" name="perso_prenom" id="perso_prenom" placeholder="Prénom du personnage" required>
            </div>
            <div class="form-div">
                <label for="perso_prenom">Nom</label>
                <input type="text" name="perso_nom" id="perso_nom" placeholder="Nom du personnage">
            </div>
            <div class="form-div">
            <select name="perso_categorie" id="perso_categorie">
                <option selected>Veuillez selectionner une catégorie</option>
                <option value="1">Ordre Jedi</option>
                <option value="2">Sith</option>
                <option value="3">Chasseur de primes</option>
            </select>
            </div>
            <!-- <div class="form-div">
                <label>Image*</label>
                <input type="file" name="perso_img" id="perso_img" required>
            </div> -->
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