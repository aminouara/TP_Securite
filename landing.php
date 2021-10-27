<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }
?>
<!doctype html>
<html lang="en">
 
  <body>
      
            <h1 class="p-5">Bonjour !</h1>
    
  </body>
</html>
