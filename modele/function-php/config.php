<?php
try
{
	$connexion = new PDO('mysql:host=localhost;dbname=esgisvote', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
