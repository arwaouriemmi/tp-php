<?php
session_start();
if (isset($_SESSION['nb'])){
    setcookie ('evaluation', $_POST['evaluation'], time() + 365*24*3600);  
    header('location:home.php') ;
}
else{
    $_SESSION['nb']=1 ;
?>
<meta http-equiv="refresh" content="120
; url=http://localhost/amitprograms/exercice4/verif.php" />
<link rel="stylesheet" href="node_modules/bootswatch/dist/lux/bootstrap.css">
<div class="container">
<form method ="post">
    <div>evaluez le contenu du  cours PHP</div>
    <input type="radio" name="evaluation" value="Bon">Bon<br>
    <input type="radio" name="evaluation" value="Moyen"> Moyen<br>
    <input type="radio" name="evaluation" value="Mauvais"> Mauvais
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>  
</div>
<?php
}
?>



