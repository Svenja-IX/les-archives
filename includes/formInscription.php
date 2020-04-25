<input type='button' value='Inscription' id='inscription-btn' class='header-btn'>
<div id="modalInscription">
    <div id="form-bloc">
        <div id="form-body">
            <div class="">
                <h4>Inscription</h4>
            </div>
        <form action="inscription.php" method="POST">
        <div class="form-div">
                <label for="utilisateur_prenom">Prénom</label>
                <input type="text" name="utilisateur_prenom" id="utilisateur_prenom" placeholder="Votre prénom" required>
            </div>
            <div class="form-div">
                <label for="utilisateur_nom">Nom</label>
                <input type="text" name="utilisateur_nom" id="utilisateur_nom" placeholder="Votre nom" required>
            </div>
            <div class="form-div">
                <label for="utilisateur_mail">Mail</label>
                <input type="mail" name="utilisateur_mail" id="utilisateur_mail" placeholder="Votre mail" required>
            </div>
            <div class="form-div">
                <label for="utilisateur_mdp">Mot de passe</label>
                <input type="password" name="utilisateur_mdp" id="utilisateur_mdp" placeholder="Entrez un mot de passe" required>
            </div>
            <div class="form-div">
                <label for="utilisateur_confirmMdp">Confirmer le mot de passe</label>
                <input type="password" name="utilisateur_confirmMdp" id="utilisateur_confirmMdp" placeholder="Entrez le même mot de passe" required>
            </div>
            <div class='btn'>
                <div class="form-btn">
                    <input type="button" name="fermerInscription" id="fermerInscription" value="Fermer">
                </div>
                <div class="form-btn">
                    <input type="submit">
                </div>
            </div>
        </form>
        </div>
    </div>
</div>