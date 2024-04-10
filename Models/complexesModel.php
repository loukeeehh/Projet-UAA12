<?php 

function selectAllComplexes ($pdo) 
    {

        try {
          
            //défintiion de la requête
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