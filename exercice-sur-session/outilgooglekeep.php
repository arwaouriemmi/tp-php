<?php
session_start();
if (isset($_SESSION['nb'])){
    $_SESSION['nb']++;
   
  
}
else{
    $_SESSION['nb']=1;
}
?>
<link rel="stylesheet" href="node_modules/bootswatch/dist/lux/bootstrap.css">
<div class="container">
    <form action="notelist.php" method="post">
            <div>
            <label for="note">note:</label><textarea id="note" name="note" rows="1" cols="20"  class="form-control" placeholder="note"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

           
    </form>
