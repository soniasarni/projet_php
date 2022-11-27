<?php

require_once "../../entities/User.php";
session_start();
if ($_SESSION["email"] && $_SESSION["role"]=="admin") {
    // echo $_SESSION["nom"] ." ".$_SESSION["prenom"] ." ".$_SESSION["email"];  


@$message=$_GET['message'];
?>


<!DOCTYPE html>  
<html>
<head>
<meta charset="UTF-8">
<title>php_poo</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deconnexion.php">Deconnexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" action="post"type="submit" name="produits">produits</a>
        </li>
        <li class="nav-item" style="margin-left:700px">
        <a class="nav-link "href="updateClient.php?retour=dashboardadmin.php">Bonjour <?php echo $_SESSION["prenom"] ." ".$_SESSION["nom"]?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php


@$message=$_GET['message'];


?>

<h2 align=center>je suis la page dashboard admin</h2>
<a href="ListUser.php">Liste users</a>
</body>



<?php }
?>