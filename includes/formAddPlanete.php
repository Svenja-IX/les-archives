<div id="modal-add-planete">
    <div id="form-bloc">
        <div id="form-body">
            <div class="">
                <h4>Ajouter une planete</h4>
            </div>
        <form action="addPlanete.php" method="POST" enctype="multipart/form-data">
            <div class="form-div">
                <label for="planete_nom">Nom</label>
                <input type="text" name="planete_nom" id="planete_nom" placeholder="Nom de la planete">
            </div>
            <div class="form-div">
                <label>Image* (format carré SVP)</label>
                <input type="file" name="planete_img" id="planete_img" required>
            </div>
            <!-- <div class="form-div">
            <select name="organisation_categorie" id="organisation_categorie">
                <option selected>Veuillez selectionner une catégorie</option>
                <option value="1">Ordre Jedi</option>
                <option value="2">Sith</option>
                <option value="3">Chasseur de primes</option>
            </select>
            </div> -->
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