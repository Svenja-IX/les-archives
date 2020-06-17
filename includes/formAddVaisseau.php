<div id="modal-add-perso">
    <div id="form-bloc">
        <div id="form-body">
            <div class="">
                <h4>Ajouter un vaisseau</h4>
            </div>
        <form action="addVaisseau.php" method="POST" enctype="multipart/form-data">
            <div class="form-div">
                <label for="vaisseau_nom">Nom</label>
                <input type="text" name="vaisseau_nom" id="vaisseau_nom" placeholder="Nom du personnage">
            </div>
            <div class="form-div">
                <label>Image* (format carré SVP)</label>
                <input type="file" name="vaisseau_img" id="vaisseau_img" required>
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