<?php
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $pwd=$_POST['password'];
    $tel=$_POST['tel'];
    $role="client";
    $dateInscription=date("Y-m-d H:i:s");
echo"$prenom";
    require_once "../DAO/Config.php";
  
    $pdo = $pdoConnexion->createConnexion();

    
    $sql = "INSERT INTO user (nom,prenom,email,password,role,date_creation)
            VALUES ('".$nom."', '".$prenom."', '".$email."', '".$pwd."','".$role."','".$dateInscription."')";
    $pdo->exec($sql);
    header('Location:index.php');
    