<?php

    //Contrôle si les champs sont vides
    $nom = isset($_POST['txtNom'])? $_POST['txtNom'] : "";
    $prenom = isset($_POST['txtPrenom'])? $_POST['txtPrenom'] : "";
    $login = isset($_POST['txtId'])? $_POST['txtId'] : "";
    $mdp = isset($_POST['txtMdp'])? $_POST['txtMdp'] : "";
    $email = isset($_POST['txtMail'])? $_POST['txtMail'] : "";


    if(!empty($nom) && !empty($prenom) && !empty($login) && !empty($mdp) && !empty($email)){

        //Connexion au serveur
        $conn = new PDO('mysql:host=localhost;dbname=gestion_notes_de_frais;charset=utf8',"root","");

        $conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        $sql = "INSERT INTO users(nom,prenom,login,mdp,email,profil_id) VALUES (?,?,?,?,?,?)";

        $req = $conn->prepare($sql);

        try {
            $req->execute(array($nom,$prenom,$login,$mdp,$email,1));
        }catch(Exception $e){
            echo "Erreur : $e->getMessage())" ;
            exit();
        }

        echo "Votre compte a été crée" ; 
        }

            
            