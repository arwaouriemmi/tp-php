<?php
 include_once 't.php' ;
$s_nom=$_POST['nom'];
$s_prenom=$_POST['prenom'];
$s_nb=$_POST['nb_sandwitch'];
$s_adr=$_POST['adresse'];
$cin=$_POST['CIN'];
 if (isset($_POST['harissa'])) {$s_harissa=$_POST['harissa'] ; }
 if (isset($_POST['salade'])) {$s_salade=$_POST['salade']; } 
 if (isset($_POST['mayo'])) {$s_mayo=$_POST['mayo'] ; }
 echo("details de votre commande : <br> votre nom est : $s_nom votre prénom est : $s_prenom <br>  votre adresse est $s_adr <br>   votre CIN est: $cin <br>le nombre de sandwitch voulu est : $s_nb <br>");
 for ($i=0; $i<$s_nb; $i++) {
    $harissa="harissa". strval($i) ;
    $salade="salade". strval($i) ; 
    $mayo="mayo". strval($i) ;
    $ts="type_du_sandwitch".strval($i) ;
    echo "pour le sandwitch numero $i <br> le type est $_POST[$ts] <br>" ;
     echo " les ingrèdients sont :  <br>" ;
     if (isset($_POST[$harissa])){
     echo "$_POST[$harissa] <br>"; }
     if (isset($_POST[$salade])){
        echo "$_POST[$salade] <br>"; }
    if (isset($_POST[$mayo])){
            echo "$_POST[$mayo] <br>"; }
      
      
    }
 if ($s_nb<11){$s_prix =4*$s_nb ;
    echo("le prix total est $s_prix dinars ");}
else{
    $s_prix =(4*$s_nb)-(4*$s_nb*0.1) ;
    echo("le prix total est $s_prix dinars ") ;

    }
  
 





?>