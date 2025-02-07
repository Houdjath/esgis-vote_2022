<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom css -->
    <link rel= "stylesheet" href="style.css">
    <title>Ajouter Membres</title>
  </head>
  <body>
    <div class="global-container">
      <div class="card login-form">
        <div class="card-body">
          <h2 class="card-title text-center">Ajout membres</h2>
        </div>
        <div class="card-text">
        <form action="../modele/function-php/membre_add.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Code</label>
    <input type="text" name="code" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="d-grid gap-2">
       <button type="submit" class="btn btn-primary">Ajouter</button>
  </div>
  
</form>
        </div>
      </div>
    </div>   
  </body>
</html>