<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/lux/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
    include_once 't.php' ;
   ?>
     
  
   
</head>
<div class="container">
    <form action="recap.php" method="post">
            <div>
            <label for="nom">Nom :</label><input type="text" id="nom" name="nom"  class="form-control" placeholder="nom">
            </div>
            <div>
            <label for="prenom">Prenom :</label><input type="text" id="prenom" name="prenom"  class="form-control" placeholder="prenom">
            </div>
            <div>
            <label for="nb sandwitch">nombre sandwitch :</label><input type="number" name="nb sandwitch"  class="form-control" placeholder="nombre sandwitch" id="i">
            </div>
            <div>
            <label for="adresse">adresse:</label><textarea id="adresse" name="adresse" rows="1" cols="20"  class="form-control" placeholder="adresse"></textarea>
            </div>
            <div>
            <label for="CIN">CIN:</label><input type="number" name="CIN"  class="form-control" placeholder="CIN">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

           
    </form>



</div>

<script src="resa.js"></script>  
</body>
</html>
