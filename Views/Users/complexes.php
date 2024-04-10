
    <?php foreach ($complexes as $complexe) :?>
        <div class="organisation">
            <h2> <?= $complexe-> nomComplexe ?></h2>
            <?php $imageComplexe?>
            <img src="../Assets/images/complexe_1.jpg" alt="complexe de Floreffe">
                <p><?= $complexe-> adresseComplexe .", ".$complexe-> villeComplexe.", ". $complexe-> numPhoneComplexe ?></p>
                <p><?= $complexe-> descriptionComplexes?></p>
            
        </div>
    <?php endforeach ?>


