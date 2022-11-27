<?php

require_once "../../entities/User.php";
$action=$_POST['action'];
$nom=htmlspecialchars(trim(strtolower($_POST['nom'])));
$prenom=htmlspecialchars(trim(strtolower($_POST['prenom'])));
$email=htmlspecialchars(trim(strtolower($_POST['email'])));
$tel=trim($_POST['tel']);
$password=md5($_POST['password']);
$nom_photo= $_POST["photo"];
$date=date("Y-m-d H:i:s");
$role="client";
$message="";
 if(!empty($action)){
    if(empty($nom))$message.="<li>nom invalide!</li>";
    if(empty($prenom))$message.="<li>prenom invalide!</li>";
    if(empty($email))$message.="<li>email invalide!</li>";
    if(empty($password))$message="<li>password invalide!</li>";
    if(empty($tel))$message.="<li>tel invalide!</li>";
if(empty($message)){

    GLOBAL $con; 
   echo"cooool";
    $sql="INSERT INTO user(nom,prenom,email,password,tel,photo,date_creation,role)values(?,?,?,?,?,?,?,?)";
    $stmt=$con->prepare($sql);

 $stmt->bindValue(1,$nom,PDO::PARAM_STR);
 $stmt->bindValue(2,$prenom,PDO::PARAM_STR);
 $stmt->bindValue(3,$email,PDO::PARAM_STR);
 $stmt->bindValue(4,$password,PDO::PARAM_STR);
 $stmt->bindValue(5,$tel,PDO::PARAM_STR);
 $stmt->bindValue(6,$nom_photo,PDO::PARAM_STR);
 $stmt->bindValue(7,$date,PDO::PARAM_STMT);
 $stmt->bindValue(8,$role,PDO::PARAM_STR);

$stmt->execute();
header("location:../../views/users/login.php");


}  
    
 }