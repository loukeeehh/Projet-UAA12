<div class="banner">
            <div><img src="Assets/images/louka_sports.png"></div>
            <div class="home_title">Vos centres sportifs pour toute la famille !</div>
            <div>
                <ul class="navigation">
                   <?php if (isset($_SESSION["user"])) : ?>  
                    <li><a href="/">Accueil</a></li>
                    <li><a href="profil">Profil</a></li>
                    <li><a href="complexes">Nos centres</a></li>
                    <li><a href="deconnexion">Déconnexion</a></li>
                    
                    <?php else : ?>
                        <li><a href="/">Accueil</a></li>
                        <li><a href="connexion">Connexion</a></li>
                        <li><a href="inscription">Créer un compte</a></li> 
                        
                    <?php endif ?>    
                 
                </ul>
                
            </div>
        </div>