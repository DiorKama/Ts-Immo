<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
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
    <div class="wrapper mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3 btn btn-primary">Details Proprietaires</h1>
                   
                    <div class="form-group">
                        <label>Nom</label>
                        <p><b><?= $data->getNom()?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Prenom</label>
                        <p><b><?= $data->getPrenom()?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Sexe</label>
                        <p><b><?= $data->getSexe()?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Date de Naissance</label>
                        <p><b><?= $data->getDate_naissance()?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Addresse</label>
                        <p><b><?=  $data->getAddresse()?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Telephone</label>
                        <p><b><?=  $data->getTelephone()?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Piece d'identite</label>
                        <p><b><?=  $data->getpiece_identite()?></b></p>
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Date d'ajout</label>
                        <p><b><?=  $data->getDate_ajout()?></b></p>
                    </div>

                    <p class="mt-5"><a href="http://localhost/ts_immo/Proprietaire/listProprietaire" class="btn btn-success">Retour</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>