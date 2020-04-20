<!-- Modal connexion -->
<div class="modal fade" id="ajoutJedi" tabindex="-1" role="dialog" aria-labelledby="connectTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="connectTitle">Ajouter un jedi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- FORMULAIRE -->
                <form action="jedi.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Prénom</label>
                      <input type="text" class="form-control" name="jedi_prenom" id="jedi_prenom" placeholder="Prénom">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nom</label>
                      <input type="text" class="form-control" name="jedi_nom" id="jedi_nom" placeholder="Nom">
                    </div>
                    <select name="jedi_rang" id="jedi_rang">
                      <option value="1">Padawan</option>
                      <option value="2">Chevalier Jedi</option>
                      <option value="3">Maître Jedi</option>
                      <option value="4">Grand Maître Jedi</option>
                      <option value="5">Sith</option>
                    </select>
                    <select name="jedi_sexe" id="jedi_sexe">
                      <option value="1">Homme</option>
                      <option value="2">Femme</option>
                    </select>
                    <select name="jedi_race" id="jedi_race">
                      <option value="1">Togruta</option>
                      <option value="2">Humain(e)</option>
                      <option value="3">Zabrak</option>
                    </select>
                    <input type="file" name="jedi_img">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                  </form>
            </div>
          </div>
        </div>
      </div>