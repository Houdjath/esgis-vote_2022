<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.min.css" />
    <title>ESGIS-ELECTION</title>
</head>
<body>
 
<div>
            <?php
            //Menu de la page
            require_once('../vue/partie/navbar.php');
            ?>
        </div>
        <div>
            <?php
            //Contenu de la page
            // require_once('../esgisvote/content.php');
            //  include_once('index2.php');
            include_once('config.php');
            ?>
        </div>
        <div>
            <?php
            // Pied de la page
            require_once('../vue/partie/footer.php');
            ?>
        </div>

<script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js"></script>
</body>
</html>