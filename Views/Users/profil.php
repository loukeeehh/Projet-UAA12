<div>
    <p class="bold">Nom :</p>
    <p><?= $_SESSION['user']-> nomUser ?></p>

    <p class="bold">Prénom :</p>
    <p><?= $_SESSION['user']-> prenomUser ?></p>

    <p class="bold">Login :</p>
    <p><?= $_SESSION['user']-> loginUser ?></p>

    <p class="bold">Genre : </p>
    <p><?= $_SESSION['user']-> genreUser ?></p>

    <p class="bold">Date de naissance :</p>
    <p><?= $_SESSION['user']-> bornUser ?></p>

    <p class="bold">Email :</p>
    <p><?= $_SESSION['user']-> mailUser ?></p>

    <p class="bold"> Mot de passe :</p>
    <p><?= $_SESSION['user']-> passwordUser ?></p>

    
    <?php if (isset($_SESSION['user'])) : ?>
    <div class="button">
      <a class="modifier2" href="/deleteProfil">supprimer votre compte</a>
    </div>
    <?php endif ?>

    <?php if (isset($_SESSION['user'])) : ?>
    <div class="button">
      <a class="modifier2" href="inscription">modifier</a>
    </div>
    <?php endif ?>
</div> 
