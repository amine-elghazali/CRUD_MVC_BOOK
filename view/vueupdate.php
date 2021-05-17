<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Ajouter Book</title>
</head>


<body class="bg-dark">
    <div class="card mt-5" style="width:50%;margin:auto;">
        <div class="card-header">
            <h2>Mettre à jour : </h2>
        </div>

        
        <div class="card-body">

            <form method="post" action="http://localhost/phpFolder/MVC_FRAMEWORK/testlsi/index.php?action=update">

                <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input class="form-control" type="text"  id="name"  name="name" value="<?= $row['name'] ?> ">
                </div>

                <div class="form-group">
                    <input type="hidden"  name="oldnom" value="<?= $row['name'] ?>">
                </div>

                <div class="form-group">
                    <label for="auteur">Auteur:</label>
                    <input class="form-control" type="text"  id="auteur" name="auteur" value="<?= $row['auteur'] ?> ">
                </div>

                <div class="form-group">
                    <label for="annee">Annee:</label>
                    <input class="form-control" type="number"  id="annee" name="annee" value="<?= $row['annee'] ?> ">
                </div>

                <button type="submit" class="btn btn-primary" class="form-control"> mettre à jour</button>
            </form>
        </div>
    </div>
</body>
</html>