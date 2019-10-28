<?php
    try {
        $host = "localhost:8889";
        $user = "root";
        $password = "root" ;
        $dbname = "cours_sql";

        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    function getEtudiantsWithFormation(){
        global $db;
        $req = $db->query('SELECT * from etudiant INNER JOIN formation ON etudiant.fk_formation_id = formation.formation_id');
        return $req;
    }

    function getEtudiant($id){
        global $db;
        $req = $db->query('SELECT * from etudiant WHERE etudiant_id = ' . $id );
        return $req;
    }

    function getEtudiantByName($name){
        global $db;
        $req = $db->prepare('SELECT * from etudiant WHERE nom = :nom' );
        $req->bindParam(':nom', $name);
        $req->execute();
        return $req;
    }