<?php
require_once "../../entities/User.php";

@$id=$_GET['id'];
@$action=$_GET['action'];
echo $action.$id;

     global $con;
$sql="delete from user WHERE id=? ";

$stmt=$con->prepare($sql);
$stmt->bindValue(1,@$id,PDO::PARAM_INT);

 $stmt->execute();
 header("location:ListUser.php");

//var_dump( $tab);