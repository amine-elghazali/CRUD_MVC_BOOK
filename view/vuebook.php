<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<?php $this->titre = "Mes Books"; ?>

<body style="width:75rem;" class="bg-dark  m-auto">
    <div class="card mt-5 mb-5">
        <div class="card-header">
            <h2>Books</h2>
        </div>

        <div class="card-body">
            <table class=" table">
                <thead class="thead-dark">
                    <tr>        
                        <th> Nom</th>
                        <th> Auteur</th>
                        <th> Annee</th>
                        <th> Actions </th>
                    </tr>
                </thead>

                <?php foreach ($books as $book): ?>

                        <tr>
                            <th class="titreBillet"><?php echo $book->getName(); ?></th>
                            </a>
                            <td><?php echo $book->getAuteur();?></td>
                            <td><?php echo $book->getAnnee() ; ?></td> 
                            
                            <td><form action="http://localhost/phpFolder/MVC_FRAMEWORK/testlsi/index.php?action=delete" method="post" >
                                    <button class="btn btn-danger" value="<?php echo $book->getName();?>" name="nom_delete">
                                            Delete
                                    </button>
                            </form></td>
                            
                            <td><form action="http://localhost/phpFolder/MVC_FRAMEWORK/testlsi/index.php?action=getonerow" method="post" >
                                    <button class="btn btn-primary" value="<?php echo $book->getName();?>" name="nom_update">
                                            Modifier
                                    </button>
                            </form></td>
                        </tr>
                    
                <?php endforeach; ?>
            </table>
        </div>

        <div class="card-footer">
            <p>Add a new Book :</p>
            <a href="http://localhost/phpFolder/MVC_FRAMEWORK/testlsi/index.php?action=addbook" class="btn btn-outline-dark btn-light" >Click here </a>
        </div>
    </div>
</body>

</html>