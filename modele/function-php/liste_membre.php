<?php
// var_dump($_POST);
// die;

include('config.php');
$sql = 'SELECT email, codegroupe FROM membre, groupe Where :membre.idgroupe = :groupe.idgroupe';
$result = $connexion->prepare($sql);
$data = $result->fetchAll();
for($i = 0; $i<count($data); $i++){
    $email= $data[$i]["email"];
    $code = $data[$i]["code"];
    echo "<tr><th>$email</th><th>$code</th></tr>";
}


     