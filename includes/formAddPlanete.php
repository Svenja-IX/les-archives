<div id="modal">
    <div id="form-bloc">
        <div id="form-body">
            <div class="">
                <h4>Ajouter une planete</h4>
            </div>
        <form action="addplanete.php" method="POST">

            <div class="form-div">
                <label for="planete_prenom">Nom</label>
                <input type="text" name="planete_nom" id="planete_nom" placeholder="Nom de la planete">
            </div>
            <div class="form-div">
            <select name="planete_categorie" id=planete_categorie">
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