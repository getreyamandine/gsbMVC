<div id="contenu">
      <h2>Veuillez vous authentifier :</h2>



<form method="POST" action="index.php?uc=connexion&action=valideConnexion">
    <div id="identifiants">
    <p>
        <div id="label_login">
        <label for="nom">Login*</label>
        </div>
        <input id="login" type="text" name="login"  size="30" maxlength="45">
    </p>
    <p>
        <div id="label_mdp">
        <label for="mdp">Mot de passe*</label>
        </div>
        <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">
    </p>
    </div>
    
    <div id = valider>
        <input type="submit" value="Connexion" name="valider">
    </div>
</form>

</div>