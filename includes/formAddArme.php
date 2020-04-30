<div id="modal-add-arme">
    <div id="form-bloc">
        <div id="form-body">
            <div class="">
                <h4>Ajouter une arme</h4>
            </div>
        <form action="addArme.php" method="POST">

            <div class="form-div">
                <label for="arme_prenom">Nom</label>
                <input type="text" name="arme_nom" id="arme_nom" placeholder="Nom de l'arme">
            </div>
            <div class="form-div">
            <select name="arme_categorie" id=arme_categorie">
                <option selected>Veuillez selectionner une catégorie</option>
                <option value="1">Ordre Jedi</option>
                <option value="2">Sith</option>
                <option value="3">Chasseur de primes</option>
            </select>
            </div>
            <!-- <div class="form-div">
                <label>Image*</label>
                <input type="file" name="organisation_img" id="organisation_img" required>
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