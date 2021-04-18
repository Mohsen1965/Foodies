<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="Public/css/style.css" />
  </head>
<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){

    header("Location: /Views/Users/login.php");

    exit();
  }else{
?>

  <body>
    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre tableau de bord.</p>
    <a href="logout.php">Déconnexion</a>
    </div>
    <?php } ?>
  </body>
</html>
