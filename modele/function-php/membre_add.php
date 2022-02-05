<?php

$email = "";
$code = "";
if(isset($_POST['email']) && isset($_POST['code'])){
    
    $name = $_POST['email'];
    $code = $_POST['code'];

   
    if(!empty($email) && !empty($code)){
       
        include("config.php");
        $sql1 = 'INSERT INTO membre VALUES (:email)';
        $sql2 = 'INSERT INTO GROUPE VALUES(:codegroupe)';
        $sql3 = 'INSERT INTO MEMBRE VALUES (:id_groupe)';

        $sql1_requete = $connexion->prepare($sql1);
        $sql1_requete-> execute(array('email'=>$email));

        $sql2_requete = $connexion->prepare($sql2);
        $sql2_requete-> execute(array('codegroupe'=>$codegroupe));

        $sql3_requete = $connexion->prepare($sql3);
        $sql3_requete-> execute(array('id_groupe'=>$id_groupe));
            
        
      
        
        echo "Ajout avec succes";

         header("Location:liste_membre.php");



        




    }
}