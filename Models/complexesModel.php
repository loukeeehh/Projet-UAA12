<?php

function selectAllComplexes ($pdo) 
    {

        try {
          
            //défintion de la requête
            $query = 'select * from complexes';

            //préparation de l'éxécution de la requête 
            $selectComplexes = $pdo->prepare($query);
           
            //exécution
            $selectComplexes->execute();

            //récupération des données dans l'objet fetch
            $complexes = $selectComplexes-> fetchAll();

            //renvoi des données 
            
            return $complexes;

        } catch (PDOException $e) {
            $message = $e-> getMessage();
            die ($message);
        }
    }

    function selectOneComplexe ($pdo)
    {
        try {
            $query = 'select * from complexes where complexesID=:complexesID';
            $selectComplexe = $pdo-> prepare($query);
            $selectComplexe-> execute([
                'complexesID' => $_GET["complexesID"]
            ]);
            $complexe = $selectComplexe-> fetch();
            return $complexe;

        } catch (PDOException $e) {
            $message = $e-> getMessage();
            die ($message);
        }
    }

    function selectSportsActiveComplexes($pdo)
    {
        try {
            $query = 'select * from sports where sportsID in (select sportsID from complexessports where complexesID = :complexesID);';
            $selectSports = $pdo-> prepare($query);
            $selectSports-> execute([
                'complexesID' => $_GET["complexesID"]
            ]);
            $sports = $selectSports-> fetchAll();
            return $sports;

        } catch (PDOException $e) {
            $message = $e-> getMessage();
            die ($message);
        }
    }

  
    

function ajouteRendezVous($pdo)
{
    try {
        $query = 'INSERT INTO rendezvous(dateRendezVous, heure)
        VALUES (:dateRendezVous, :heure)';

        $ajouteRendezVous = $pdo->prepare($query);

        $ajouteRendezVous->execute([
            'dateRendezVous' => $_POST["date"],
            'heure' => $_POST["heure"],
        ]);
    } catch (PDOEXCEPTION $e) {
        $message = $e->getMessage();
        die($message);
    }
}


function selectAllOptions ($pdo)
{
    try {
        $query = 'SELECT * FROM sports';
        $selectSports = $pdo->prepare($query);
        $selectSports->execute();
        $sportifs = $selectSports-> fetchAll();
        return $sportifs;

    } catch (PDOException $e) {
        $message = $e-> getMessage();
        die ($message);
    }
}





   