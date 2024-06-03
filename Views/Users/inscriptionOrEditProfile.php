

    <div class="inscription">
        <form method="post" action="">
            <h1>Créer un compte</h1>
            <div>
                <div>
                    <p><label for="prenom">Votre prénom :</label>
                        <input type="text" placeholder="prénom" id="prenom" name="prenom" required <?php if (isset($_SESSION['user'])) : ?> value="<?= $_SESSION['user']->nomUser ?> " <?php endif ?>>
                    </p>
                </div>

                <div>
                    <p><label for="nom">Votre nom :</label>
                        <input type="text" placeholder="nom" id="nom" name="nom" required <?php if (isset($_SESSION['user'])) : ?> value="<?= $_SESSION['user']->prenomUser ?> " <?php endif ?>>
                    </p>
                </div>

                <div>
                    <p><label for="email">Login : </label>
                        <input type="text" placeholder="Login" id="login" name="login" required <?php if (isset($_SESSION['user'])) : ?> value="<?= $_SESSION['user']->loginUser ?> " <?php endif ?>>
                    </p>
                </div>

                <div>
                    <p><label for="genre">Votre genre :</label>

                        <input type="radio" id="Masculin" name="genre" value="M">
                        <label for="Masculin">Masculin</label>

                        <input type="radio" id="Feminin" name="genre" value="F">
                        <label for="Feminin">Féminin</label>
                    </p>
                </div>

                <div>
                    <p><label for="date de naissance">Votre date de naissance :</label>
                        <input type="date" placeholder="date" id="date_de_naissance" name="date_de_naissance"  required <?php if (isset($_SESSION['user'])) : ?> value="<?= $_SESSION['user']->bornUser ?> " <?php endif ?>>
                    </p>
                </div>

                <div>
                    <p><label for="email">E-mail : </label>
                        <input type="text" placeholder="E-mail" id="email" name="email" required <?php if (isset($_SESSION['user'])) : ?> value="<?= $_SESSION['user']->mailUser ?> " <?php endif ?>>
                    </p>
                </div>

                <div>
                    <p><label for="mot de passe">Votre mot de passe :</label>
                        <input type="password" placeholder="mot_de_passe" id="" name="mot_de_passe" required <?php if (isset($_SESSION['user'])) : ?> value="<?= $_SESSION['user']->passwordUser ?> " <?php endif ?>>
                    </p>
                </div>

                <div>
                    <p><button type="submit" name="btnEnvoi" value="Envoi">Valider</button></p>
                </div>

            </div>
        </form>    

    </div>


