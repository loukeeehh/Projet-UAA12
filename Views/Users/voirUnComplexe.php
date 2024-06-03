<form method = "post" action="">

<?php
    $profileImage = "../Assets/images/complexes/" . $complexe->imageComplexes;
?>

<h2> <?= $complexe->nomComplexe ?></h2>

<img src="<?= $profileImage;  ?>" alt="">
<p><?= $complexe->descriptionComplexes ?></p>

    <select name="sports[]" id="sports-select" multiple>
            <?php foreach ($sports as $sport) : ?>
                <option value="<?= $sport->sportsID ?>"><?= $sport-> nomSports?></option>
            <?php endforeach ?>    
    </select>

    <div>
        <label for="date">date</label>
        <input type="date" name = "date" <?php if(isset($_SESSION['rendezvous'])) : ?> value="<?= $_SESSION['rendezvous']->dateRendezVous ?> " <?php endif ?>>
    </div>
    
    <div>
        <label for="heure">Heure</label>
        <input type="time" name = "heure" <?php if(isset($_SESSION['rendezvous'])) : ?> value="<?= $_SESSION['rendezvous']->heure ?> " <?php endif ?>>
    </div>
    
    
    <div>
        <button type="submit" name="btnEnvoi" value="Envoi">Prendre rendez-vous</button>
    </div>

    <?php 
            if(isset($_POST['btnEnvoi'])) {
                echo ("Merci pour votre inscription !"); 
            }
        ?>
        
</form>