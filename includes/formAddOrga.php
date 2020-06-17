<div id="modal-add-orga">
    <div id="form-bloc">
        <div id="form-body">
            <div class="">
                <h4>Ajouter une organisation</h4>
            </div>
        <form action="addOrga.php" method="POST" enctype="multipart/form-data">
            <div class="form-div">
                <label for="organisation_nom">Nom</label>
                <input type="text" name="organisation_nom" id="organisation_nom" placeholder="Nom de l'organisation">
            </div>
            <div class="form-div">
                <label>Image* (format carré SVP)</label>
                <input type="file" name="organisation_img" id="organisation_img" required>
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