<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login System</title>
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>

     
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-success fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TS-IMMO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/ts_immo/Proprietaire/formulaire">AjoutProprietaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/ts_immo/Proprietaire/listProprietaire">ListeProprietaire</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="col-md-6 offset-md-3">
        <form method="POST" action="http://localhost/ts_immo/Proprietaire/modifier/<?=$data->getId()?>" >
            <div class="mb-3">
            <input type="hidden" name="id_proprietaire" value="<?=$data->getId() ?>"id="">
              <label for="exampleInputEmail1" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" value="<?=$data->getNom() ?>" name="nom" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" value="<?=$data->getPrenom() ?>"  name="prenom" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sexe</label>
                <input type="text" class="form-control" id="sexe" name="sexe" value="<?=$data->getSexe() ?>" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Date de Naissance</label>
                <input type="date" class="form-control" id="date_naissance"  name="date_naissance" value="<?=$data->getDate_naissance() ?>" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Addresse</label>
                <input type="text"  class="form-control" id="addresse" name="addresse" value="<?=$data->getAddresse() ?>" aria-describedby="emailHelp">
              </div>
              
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telephone</label>
                <input type="number"  class="form-control" id="telephone" name="telephone" value="<?=$data->getTelephone() ?>" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Piece d'identite</label>
                <input type="text"  class="form-control" id="piece_identite" name="piece_identite" value="<?=$data->getpiece_identite() ?>" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">date_ajout</label>
                <input type="date"  class="form-control" id="date_ajout" name="date_ajout" value="<?=$data->getDate_ajout() ?>" aria-describedby="emailHelp">
              </div>
              <input type="submit" class="button btn btn-success" value="Modifier" name="add">
          </form>
      </div>
      <div class="col-6">
</body>
</html>