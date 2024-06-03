


    <div class="connexion">
        <form method = "post" action="">
    <div>
        <p><label for="Login">Se connecter</label>
        <input type="login" name = "login" <?php if (isset($_SESSION['user'])) : ?> value="<?= $_SESSION['user']->loginUser ?> " <?php endif ?>></p>
    </div>
    
    <div>
    <p><label for="PassWord">Mot de passe</label>
        <input type="password" name = "mot_de_passe" <?php if (isset($_SESSION['user'])) : ?> value="<?= $_SESSION['user']->passwordUser ?> " <?php endif ?>></p>
    </div>

    <div>
        <button type="submit" name="btnEnvoi" value="Envoi">Valider</button>
    </div>
    </form>
    <p>Pas encore de compte ? <a href="inscription">Créer un compte</a></p>
   
    </div>

