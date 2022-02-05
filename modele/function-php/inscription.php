<?php
require_once 'config.php';

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['niveau']) && isset($_POST['filiere']) && isset($_POST['groupe']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['etat'])){
    $nom = htmlentities(addslashes($_POST['nom']));
    $nom = htmlentities(addslashes($_POST['prenom']));
    $nom = htmlentities(addslashes($_POST['niveau']));
    $nom = htmlentities(addslashes($_POST['filiere']));
    $nom = htmlentities(addslashes($_POST['groupe']));
    $nom = htmlentities(addslashes($_POST['email']));
    $pwd = htmlentities(($_POST['pwd']));
    $nom = htmlentities(addslashes($_POST['etat']));


    $sql = 'SELECT * FROM etudiant WHERE email= ?';
    $sql_requete = $connexion->prepare($sql);
    $sql_requete-> execute(array($email));
    $data = $sql_requete->fetch();
    $tr = $sql_requete->rowCount();

    if($tr == 0){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $pwd = hash('sha256', $pwd);
            $sql = 'INSERT INTO etudiant (nom, prenom, niveau,filiere, groupe, email, pwd, etat) VALUES ( :nom, :prenom, :niveau, :filiere, :groupe, :email, :pwd, :etat) ';
            $sql_requete = $connexion->prepare($sql);
            $sql_requete-> execute(
                array(
                    'nom'=> $nom,
                    'prenom'=> $prenom,
                    'niveau'=> $niveau,
                    'filiere'=> $filiere,
                    'groupe'=> $groupe,
                    'email'=> $email,
                    'pwd'=> $pwd,
                    'etat'=> $etat,
                ));
                header('Location:inscription.php?reg_err=succes');
            }header('Location:inscription.php?errorMembre');

    }else header('Location:inscription.php?erroralready');
                
                    
    
                
               


}