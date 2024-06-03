<?php foreach ($complexes as $complexe) : ?>
    <div class="organisation">
        <h2> <?= $complexe->nomComplexe ?></h2>


        <div class="container">
            

            <div>
                <?php

                    $profileImage = "../Assets/images/complexes/" . $complexe->imageComplexes;

                ?>
                <img src="<?= $profileImage;  ?>" alt="">
                <p><?= $complexe->adresseComplexe . ", " . $complexe->villeComplexe . ", " . $complexe->numPhoneComplexe ?></p>


                <p class="button"><a href="voirUnComplexe?complexesID=<?=$complexe-> complexesID ?>">Voir les détails</a></p>

            </div>
        <?php endforeach ?>