<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>


<?php $this->titre = "Form book"; ?>
<h1><?php echo $toto  ?></h1>

<body class="bg-dark">
        <div class="card mt-5" style="width:75rem;margin:auto;">

                <div class="card-header">
                        <h2>Add book : </h2>
                </div>

                <div class="card-body">
                
                        <form  method="POST"  action="index.php?action=savebook">
                                <div class="form-group">
                                        <label>NOM </label>
                                        <input type="text" name="name" id="name" class="form-control" /> </br>
                                </div>

                                <div class="form-group">
                                        <label>Annee </label>
                                        <input type="text" name="annee" id="annee" class="form-control" /> </br>
                                </div>

                                <div class="form-group">
                                        <label>Auteur </label>
                                        <input type="text" name="auteur" id="auteur" class="form-control" /> </br>
                                </div>
                                        <input type="submit" class="btn btn-info"  value="ADD " />
                        </form>
                </div>
                        
        </div>
</body>

</html>